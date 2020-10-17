<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\States;
class UsersController extends Controller
{
    public function index(){
        return view('users.user');
    }
    //This fetches data from our DB and displays it in the state dropdown menu
    public function fetch(Request $request){
        if($request->get('nigerianstates')) { 
            $query=$request->get('nigerianstates');
            $data=DB::table('states')
                ->where('stateName', 'like', '%' .$query.'%')
                ->get();
            $output = '<ul style="display:block !important;" class="dropdown-menu">';
            if($data->count()>0){
                foreach($data as $row){
                    $output .= '<li>' .$row->stateName. '</li>';
                }
                    $output .= '</ul>';
                    echo $output;
            }
            else{
                    $output .= '<li>Record not Found! </li>';
                    echo $output;
            }
               
        }
    }
}
