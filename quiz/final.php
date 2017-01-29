<?php session_start(); ?>

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
                <h2>You are done</h2>
                <p>Congrats you have completed the test</p>
                <p>Final Score: <?php echo $_SESSION['score']; ?></p>
                <a href="question.php?n-1" class="start">Take Again</a>
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

