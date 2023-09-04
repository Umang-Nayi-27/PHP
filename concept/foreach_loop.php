<?php

// only array value 
$fruits = array("apple", "banana", "cherry", "date");

foreach ($fruits as $fruit)
{
    echo "Fruit: $fruit <br>";
}


//only value of key => value
$studentScores = array("Alice" => 85, "Bob" => 92, "Charlie" => 78);

foreach ($studentScores as $name => $score) 
{
    echo "Student: $name, Score: $score <br>";
}

?>
