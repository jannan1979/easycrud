<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testFunction($user_id, $skill_id){

    //dd("user_id: " . $user_id . " skill_id: " . $skill_id);
    $skill_id = "<script>alert('I am a baaaaad virus');</script>";
    
    return view("test")->with([

        'user_id' => $user_id,
        'skill_id' => $skill_id
    ]);    
    }
}
