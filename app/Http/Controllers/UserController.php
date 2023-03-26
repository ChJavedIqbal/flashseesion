<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function storeM(Request $req){
        $data =  $req->input('user');
        $req->session()->flash('store',$data);
        return redirect('store');
    }
}
