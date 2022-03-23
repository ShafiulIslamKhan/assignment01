<?php 

    //1.- এমন একটি রেজাল্ট ফাংসন তৈরি করুন যে কিনা আপনাকে গ্রেড এবং জিপিএ রিটান দিবে 
    function result_check (int $marks , string $name){
        if($marks > 100 || $marks < 0){
            echo "Invalid Result";
        } 
        else if($marks == 100){
            echo "{$name} Graded with A* and GPA 5";
        } 
        else if($marks >= 80){
            echo "{$name} Graded with A and GPA 4";
        } 
        else if($marks >= 70){
            echo "{$name} Graded with B and GPA 3";
        } 
        else if($marks >= 60){
            echo "{$name} Graded with C and GPA 2";
        } 
        else if($marks >= 45 && $marks < 60){
            echo "{$name} Passed and GPA 1";
        } 
        else if($marks < 45){
            echo "You Failed and GPA 0";
        } 
        
    }

     //2.- আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তের ব্যাস বের করার জন্য একটি ফাংসন বানান
     function area (string $type = null, int $i = 0, int $j = 0) {

         if($type == null) echo "specify geometrical shape";
         elseif($type == 'rectangle') return $i*$j;
         elseif($type == 'square') return $i*$i;
         elseif($type == 'circle') return 3.14 * ($i * $i);
         else echo "undefined error";

     }
    
     //3.- বয়স বের করার জন্য একটি ফাংসন বানান
     function ageCal(string $name, int $year){
        $age = 2022 - $year;
        echo " {$name} is {$age} years old"; 
     }

    
     //4- ডাইনামিক হেডলাইন তৈরি করার জন্য একটি ফাংসন বানান
     function heading(string $title = null, string $type = 'h1', string $align = 'center', string $ff = 'impact', string $color = '#000'){
         return     "<{$type} style='text-align:{$align};font-family:{$ff};color: $color;'>{$title}</{$type}>";
     }


     //5- এমন একটি ফাংসন বানান যাকে আপনার ওজন এবং উচ্চতা দিলে বডি ম্যাক্স ইন্ডেক্স বলে দিবে
     function getBMI($w, $h){
        $BMI    =  $w / ($h * $h);
        
        if($BMI < 18.5){
            return "You are underweight";

        }elseif($BMI >= 25 && $BMI < 30){
            return "You are normal";
        }elseif($BMI >= 30){
            return "yo are very overweight";
        }

     }





























     //6.-কারেন্সি কনভার্টার ফাংসন বানান যা কি না USD, CAD, Pound, Euro, Won কারেন্সি কে টাকাতে রিটান করবে
     function currency_converter(int $amount,string $currency){
         // logical breakdown using switch case

        switch($currency){
            case 'USD' :
                echo "{$currency} {$amount} = ".$amount * 86.17. " BDT";
            break;

            case 'CAD' :
                echo "{$currency} {$amount} = ".$amount * 68.56. " BDT";
            break;

            case 'Pound' :	
                echo "{$currency} {$amount} = ".$amount * 113.68. " BDT";
            break;

            case 'Euro':
                echo "{$currency} {$amount} = ".$amount * 94.61." BDT";
            break;

            case 'Won' :
                echo "{$currency} {$amount} = ".$amount * 0.071." BDT";
            break;

            default: 
                echo "error";
                break;
            
                
        }     

     }
   







     //7.- হতের লেখা ছোট এবং বড় করার জন্য একটি ফাংসন বানান
     function uppercase_lowercase_convert(string $txt = null, bool $b = true){
        if ( $b ) echo "<span style = 'text-transform : uppercase'>{$txt}</span>";
        else echo "<span style = 'text-transform : lowercase'>{$txt}</span>";
     }


    