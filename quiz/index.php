<?php 
include 'database.php'; 
?>

<?php
//Get total number of questions
$query="SELECT * FROM questionsFrench";
//Get results
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
                <h2>Test yourself</h2>
                <p>This is a multiple choice quiz</p>
                <ul>
                    <li><strong>Number of questions: </strong><?php echo $total; ?></li>
                    <li><strong>Multiple Choice</strong></li>
                    <li><strong>Estimated time: </strong><?php echo $total * 0.5;?> Minutes</li>
                </ul>
                <a href="question.php?n=1" class="start">Start</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &COPY; 2017 Quiz
            </div>
        </footer>
    </body>
</html>



