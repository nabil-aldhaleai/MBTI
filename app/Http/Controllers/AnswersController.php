<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Answer;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();
        return view('answers.index', compact( 'answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('answers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = $request->validate([
            "first_question" => 'required',
            "second_question" => 'required',
            "third_question" => 'required',
            "fourth_question" => 'required',
            "fifth_question" => 'required',
            "sixth_question" => 'required',
            "seventh_question" => 'required',
            "eighth_question" => 'required',
            "ninth_question" => 'required',
            "tenth_question" => 'required',
            "email" => 'required | email'
        ]);
 
        $lastAnswer = Answer::create($response);
        return redirect('/answers/results/'. $lastAnswer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return view('answers.show', compact('answer'));
    }

    public function calculateMBTI(Answer $answer){

        $mbit = '';

        // EI - Extraversion (E) or Introversion (I) calcx 
        if ((($answer->first_question >= $answer->fourth_question) || ( $answer->first_question >= $answer->fourth_question)) && $answer->first_question < 4){
            $mbit .= 'I';
        } else {
            $mbit .= 'E';
        }

        // SN - Sensing (S) or Intuition (N) calcs
        if ( $answer->second_question == $answer->fifth_question || $answer->second_question > $answer->fifth_question) {
            $mbit .= 'S';
        } else {
            $mbit .= 'N';
        }

        // TF - Thinking(T) or Feeling(F)
        if ( $answer->third_question == $answer->seventh_question || $answer->third_question < $answer->seventh_question) {
            $mbit .= 'T';
        } else {
            $mbit .= 'F';
        }

        // JP - Judging (J) or Perceiving (P) calcs
        if ((( $answer->eighth_question >= $answer->tenth_question) || ( $answer->eighth_question >= $answer->sixth_question)) && $answer->eighth_question <= 4) {
            $mbit .= 'J';
        } else {
            $mbit .= 'P';
        }

        // TODO:: generate the directions for the mbit
        
        $data = [
            'mbit' => $mbit,
            'EI direction' => '1',
            'SN direction' => '-1',
            'TF direction' => '1',
            'JP direction' => '-1'
        ];
        return view('answers.results', compact('data'));
    }
}