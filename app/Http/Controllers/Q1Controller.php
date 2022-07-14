<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SplQueue;

class Q1Controller extends Controller
{
   

    public function show()
    {
        return view('pages.Q1Input');
    }

  
    public function output(Request $request)
    {
        // $pieces = explode("", strval($request->InputNumber));
        $output = '';
        $res = array();
        $pieces = str_split(strval($request->InputNumber), 1);
        $digits = $request->InputNumber;
        $n = strlen($request->InputNumber);
        $list= array();
      
        $Map = array(
            '0' => '',
            '1' => '',
            '2' => 'ABC',
            '3' => 'DEF',
            '4' => 'GHI',
            '5' => 'JKL',
            '6' => 'MNO',
            '7' => 'PQRS',
            '8' => 'TUV',
            '9' => 'WXYV',
        );
     
        $res = $this->loop($res, $digits, '', 0,  $Map);
        foreach ($res as $value) {
            $output = $output.' '.$value;
        }
     

        return view('pages.Q1Output',array(
            'input' => $request->InputNumber,
            'output' =>  $output,
        ));

        
    }


       

     public function loop($res, $digits, $curStr, $index,  $Map){
            
        if($index == strlen($digits)){
            array_push($res,  $curStr);
            return $res;
        }
        else{
            $letters = $Map[$digits[$index]];
            for ($i=0; $i < strlen($letters); $i++) { 
                $newcurstr =$curStr.''.$letters[$i];
                $res = $this->loop($res, $digits, $newcurstr, $index + 1,  $Map);
            }
            return  $res;
        }
       
     }
    

}
