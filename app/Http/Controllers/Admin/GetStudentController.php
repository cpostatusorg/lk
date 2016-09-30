<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Model\Student\Card;
use Validator;

class GetStudentController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware(['auth', 'AdminRoleCheck']);
        $this->request = $request;
        echo "123";
    }

    public function index()
    {
        $class = str_replace( " ", "", substr( $this->request->class,0,2 ) );

        if($this->checkClasses($class)){
            $students = User::where([
                ['school_table_id', Auth::user()->school->id],
                ['class', $class]
            ])->get();
        }else{
            $students = User::where([
                ['school_table_id', Auth::user()->school->id],
                ['parallel', $class]
            ])->get();
        }

        return $students->toJson();
    }

    public function checkClasses($class)
    {
        $classes = array('а','б','в','г','д','е','ж','з','и','к','л','м','н','о','п','р','с','т','у','ф','х',);
        if( in_array($class, $classes) ){
            return 1;
        }else{
            return 0;
        }
    }
}
