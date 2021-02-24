<?php

namespace App\Http\Controllers;

use App\Http\Requests\TutorRequest;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index() {
        
        return view("tutor");

    }

    public function store(TutorRequest $request) {

        dd($request);

    }
}
