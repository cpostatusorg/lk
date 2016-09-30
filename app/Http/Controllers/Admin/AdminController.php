<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Model\Student\Card;
use Validator;


class AdminController extends Controller
{
    protected $request;
    protected $card;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware(['auth', 'AdminRoleCheck']);
        $this->request = $request;

       echo 23;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_students = User::all()->where('school_table_id', Auth::user()->school->id);
        return view('admins/admin')->with('all_students', $all_students);
    }

    public function addElement()
    {
        //Установка карты
        $card_number = (int) $this->request->card_number;
        $this->card = Card::where('card_number', $card_number)->first();
        //Стандартные проверки
        $validator = $this->postControl();
        if($validator->fails()){
            return $validator->errors();
        }
        //Проверка на параллель и класс
        $parallels = $this->checkParralels();
        if( !$parallels ){
            return json_encode('parallels');
        }
        $classes = $this->checkClasses();
        if( !$classes ){
            return json_encode('class');
        }
        //Проверка карты
        $json_data = $this->checkCard();
        if( $json_data != 1 ){
            return $json_data;
        }
        //Проверка пользователя с текущими параметрами (ПОДУМАТЬ)
        $json_data = $this->checkUser();
        if( $json_data != 1 ){
            return $json_data;
        }
        //Обновление пользователя (по сути регистрация)
        $json_data = $this->updateUser();
        if( $json_data != 1 ){
            return $json_data;
        }else{
            $json_data = array(
                'error' => '0',
                'text' => 'Ученик привязан к карте.'
            );
            return json_encode($json_data);
        }
    }

    public function postControl()
    {
        $validator = Validator::make($this->request->all(),[
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'midName' => 'required|max:255',
            'card_number' => 'required|max:15',
            'parallel' => 'required|max:2',
            'classof' => 'required|max:1'
        ]);
        return $validator;
    }

    public function checkParralels()
    {
        $parallels = array('1','2','3','4','5','6','7','8','9','10','11');
        if( in_array($this->request->parallel, $parallels) ){
            return 1;
        }else{
            return 0;
        }
    }

    public function checkClasses()
    {
        $classes = array('а','б','в','г','д','е','ж','з','и','к','л','м','н','о','п','р','с','т','у','ф','х',);
        if( in_array($this->request->classof, $classes) ){
            return 1;
        }else{
            return 0;
        }
    }

    public function checkCard()
    {
        $card_number = (int) $this->request->card_number;
        //Действие - Ищем карту по запросу
        $card = Card::where('card_number', $card_number)->first();
        if ( $card == null ) {
            //Результат - Ошибка
            //Действие - Возврат ошибки
            $json_data = array(
                'error' => '1',
                'text' => 'Карта с номером ' . $card_number . ' не найдена. Пожалуйста проверьте введенные данные и попытайтесь снова'
            );
            return json_encode($json_data);
        }else{
            return 1;
        }
    }

    public function checkUser()
    {
        $card_number = (int) $this->request->card_number;
        $card = Card::where('card_number', $card_number)->first();
        //Результат - Карта найдена
        //Действие - Ищем пользователя с таким номером карты, текущей школой, фио, параллель, класс
        $user = User::where([
            ['card_table_id', $card->id],
            //['school_table_id', Auth::user()->school->id],
            //['fio', $this->request->fio],
            //['parallel', $this->request->parallel],
            //['class', $this->request->classof]
        ])->first();

        if( $user == null ){
            //Результат - не найден
            //Действие - Возврат TRUE
            return 1;
        }else{
            //Результат - Ошибка
            //Действие - Возврат ошибки
            $json_data = array(
                'error' => '1',
                'text' => 'Карта с номером '.$card->card_number.' используется пользователем '.$user->name,
            );
            return json_encode($json_data);
        }

    }

    public function updateUser(){
        $updateRandomUser = User::where([
            ['card_table_id', 0],
            ['school_table_id', Auth::user()->school->id]
        ])->first();



        if( $updateRandomUser == null ){
            $json_data = array(
                'error' => '1',
                'text' => 'Пулл аккаунтов закончился'
            );
            return json_encode($json_data);
        }else{
            $updateRandomUser->firstName = $this->request->firstName;
            $updateRandomUser->lastName = $this->request->lastName;
            $updateRandomUser->midName = $this->request->midName;
            $updateRandomUser->parallel = $this->request->parallel;
            $updateRandomUser->class = $this->request->classof;
            $updateRandomUser->card_table_id = $this->card->id;
            $updateRandomUser->save();
            return 1;
        }
    }

    public function editElement()
    {
        return 1;
    }

}
















