<?php 
include 'database.php'; 
?>

<?php session_start(); ?>

<?php
//Set question number
$number = (int) $_GET['n'];

//Get question

$query="SELECT * FROM questionsFrench WHERE question_number=$number";

$result = $mysqli->query($query);

$question = $result->fetch_assoc();

//Get choices

$query="SELECT * FROM frenchChoices WHERE question_number=$number";

$choices = $mysqli->query($query);

$query="SELECT * FROM questionsFrench";

    $results= $mysqli->query($query);

    $total= $results->num_rows;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Quiz</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Quiz</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
                <p class="question">
                    <?php echo $question['text'];?>
                </p>
                <form method="post" action="process.php">
                    <ul class="choices">
                        <?php while ($row= $choices->fetch_assoc()):?>
                         <li><input name="choice" type="radio" value="<?php echo $row['choiceID']; ?>"/><?php echo $row['text']; ?></li>
                        <?php endwhile;?>
                       
                    </ul>
                    <input type="submit" value="Submit"/>
                    <input type="hidden" name="number" value="<?php echo $number; ?>" />
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &COPY; 2017 Quiz
            </div>
        </footer>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

