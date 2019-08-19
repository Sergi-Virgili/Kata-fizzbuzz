<?php

namespace factoriaF5;

class Kata
{   
    private $firstNumber;
    private $lastNumber;
    private $numbersArray = [];

    public function __construct($firstNumber = 0, $lastNumber = 100)  {
        $this->firstNumber = $firstNumber;
        $this->lastNumber = $lastNumber;
        
        
    } 

    public function returnArray(){
        $numbers = [];
        for ($i = $this->firstNumber; 
            $i < $this->lastNumber; 
            $i++  ) 
            {
            $number = $i+1;
            array_push($numbers, $this->returnValue($number));
            };
        $this->numbersArray = $numbers;
        return $numbers;

    }

    public function returnValue($number){

        $result1 = $number % 5;
        $result2 = $number % 3;
        if(($result1 == 0) & ($result2 == 0)){
            return 'FizzBuzz';
        }
       
        $result = $number % 3;
        if($result == 0){
            return 'Fizz';
        }

        $result = $number % 5;
        if($result == 0){
            return 'Buzz';
        }

        return $number;
    }
    public function printArray(){
        $result = $this->returnArray();
        $i=0;
        
        while ($result[$i]) {
            echo $result[$i] ."\n";
            $i++;
        };
    }
    
};

