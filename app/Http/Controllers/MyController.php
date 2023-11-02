<?php
namespace App\Http\Controllers;
use App\Models\User;

class MyController extends Controller{

    public function First(){
        return "It is first";

    }
    public function Second(){
        return "It is second";
    }
    public function Download(){
        $path ='demo.txt';
    return response()->download($path);

    }


}
