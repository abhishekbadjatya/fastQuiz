<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;

class AuthZController extends Controller
{
    
    public function loggingin()
    {
        $data = Input::all();
        if($data['password']==''||$data['userName']=='')
            return Response(json_encode([
            'error' => 'MALFORMED_JSON']),400);
        $username =  strtolower($data['userName']);
        $usercred=[
        'userName' => $username,
        'password' => ($data['password']),
        ];
        $resp=User::logincheck($usercred);
        if($resp==false)
            return Response(json_encode(['error' => 'INCORRECT_CREDENTIALS']));
        else
         {  Session::put('username',$username);
            $usercred['password']=null;
            return Response(json_encode($usercred));
         }

    }

    public function signup()
    {
        $data = Input::all();
        if($data['password']==''||$data['userName']=='')
            return Response(json_encode([
            'error' => 'MALFORMED_JSON']),400);
        $resp=User::signup($data);

        if($resp==false)
            return Response(json_encode([
            'error' => 'USERNAME_TAKEN']));
        else
         {  
            $usercred=['userName' => $data['userName'],'password' => null];
            Session::put('username',$data['userName']);
            return Response(json_encode($usercred));
         }

    }

    public function logout()
    {
        $value = Session::flush();

    }

    public function checkSession()
    {
        if(Session::has('username'))
            {    
               $resp= User::initcall(Session::get('username'));
               if($resp==true)
               {
               $usercred=[
        'userName' => Session::get('username'),
        'password' => "",
        ];
               return Response(json_encode($usercred));
            
            }
            else
                return Response(json_encode(["error" => Session::get('username')]));
        }
        else
            return Response(json_encode(["error" => "SESSION_DOES_NOT_EXIST"]));
    }
    
}
