<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Admin_APIController extends Controller
{
    public function UserDelete(Request $request)
    {
        $id = $request->id;
        $delete =User::where('id' , $id)->delete();
    }
    public function UserListData(Request $request)
    {
        $data =User::get();
        return $data;
    }
    public function UserAdd(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;
        $repeat_pass = $request->repeat_pass;
        $company = $request->company;
        $user_role = $request->user_role;

        if ($password == $repeat_pass){

            $data = [
                'name'=>$name,
                'phone'=>$phone,
                'email'=>$email,
                'password'=> Hash::make($password),
//            'password'=> $password,
                'company'=>$company,
                'user_role'=>$user_role,
            ];

//        return $data;

            $create = User::create($data);

            if ($create){
                return 'ok';
            }else{
                return 'error';
            }
        }else{
            return 'error_pass';
        }






    }

}
