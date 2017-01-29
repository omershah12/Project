<?php include 'database.php'; ?>

<?php session_start(); ?>

<?php

//check score
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){
   $number=$_POST['number'];
   $selected_choice=$_POST['choice'];
   $next = $number+1;
   
   $query="SELECT * FROM questionsFrench";

    $results= $mysqli->query($query);

    $total= $results->num_rows;

   
   $query ="SELECT * FROM frenchChoices WHERE question_number = $number AND is_correct=1";
   
   $result = $mysqli->query($query);
   
   $row = $result -> fetch_assoc();
   
   $correct_choice = $row['choiceID'];
   
   if ($correct_choice == $selected_choice){
       $_SESSION['score']++;
   }
   
   if($number==$total){
       header("Location: final.php");
       exit();
   } else{
       header("Location: question.php?n=".$next);
   }
}