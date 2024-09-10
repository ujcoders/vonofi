<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // Method to display the spinner and quiz page
    public function index()
    {
        return view('quiz');
    }
    public function quiz2()
    {
        return view('quiz2');
    }
    public function quiz_answer()
    {
        return view('quiz_answer');
    }
}
