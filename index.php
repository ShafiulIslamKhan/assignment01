<?php 

    include_once "./functions.php";
    include_once "./capcha.php";
    //include_once "./opt.php";
    include "./loop.php";

    
    
    result_check(78,'Arif'); echo "<hr>";

    echo "Area = ".area('circle', 2); echo"<hr>";

    ageCal('Shamim', 2018); echo "<hr>";

    echo heading('Dynamic header'); echo"<hr>";
    
    echo getBMI(65, 1.5); echo "<hr>";

    currency_converter(1, 'USD');echo"<hr>";

    //NB: true for uppercase, false for lowercase, defalut true
    uppercase_lowercase_convert('this is converted to uppercase letter!', true); echo "<hr>"; 




