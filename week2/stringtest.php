<?php
    $name = "Christopher";
    $preference = "Milk Shake";
    
    // don't mix variable types
    $x = "banana";
    $sum = 1 + $x;
    print("y=$sum");
    
    // concatenate operator
    $firstname = "John";
    $lastname = "Smith";
    $fullname = $firstname . $lastname;
    print("Fullname=$fullname");
    
    //easier way to concatenate
    $fullname2 = "$firstname $lastname";
        print("Fullname2=$fullname2");
        
    // String length
    $len = strlen($fullname);
    print("$len");
    
    // trim funciton
    $in_name = "  Joe Jackson ";
    $name = trim($in_name);
    print($name);
    
    // uppercase, lowercase string
    $inquote = "Now is the time";
    $lower = strtolower($inquote);
    $upper = strtoupper($inquote);
    print("upper=$upper lower=$lower");
    
    // Substring function
    $date = "12/25/2022";
    $month = substr($date, 0, 2);
    $day = substr($date, 3, 2);
    print("Month = $month Day = $day");
    
    $year = substr($date, 6);
    print("Year=$year");
?>