<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PollRequest;

class PollController extends Controller
{
    function index(){
        return view('welcome');
    }
    
    // Once form will be submitted successfully it will comes to this action.
    function submit(PollRequest $request){
        $input = $request->all();
        // We can write further logic here if want to store data into the database
        return back()->with('success_msg', 'Data submitted successfully. Thank you!');
    }
}
