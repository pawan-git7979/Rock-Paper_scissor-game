<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Rock Paper Scissors</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <style>
        body{
            background-color: silver;
            text-align: center;
        }

        .box{
            width: 440px;
            height: 500px;
            padding: 2rem;
            margin: 2rem auto 0;
            border-radius: 10px;
            background-color: #f3f3f3;
        }

        form{
            display: flex;
            margin-top: 5rem;
            padding-bottom: 5rem;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Rock Paper Scissor</h1>
        <form action="index.php" method="post" autocomplete="off">
            <input type="text" name="choice" class="form-control">
            <input type="submit" name="shoot" value="Shoot" class="btn btn-success" />
        </form>
        <?php
            // Checks if shoot button is pressed
            if (isset($_POST['shoot'])){
                $choice = $_POST['choice'];
                // Computers choice will be a random integer for now we will assign that later
                $compChoice = rand(0, 2);

                // Checks if input is empty
                if($choice == ""){
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice!</div>";
                }else if ($choice == "rock" || $choice == "paper" || $choice == "scissors"){
                    // Checks if input is equal to either rock, paper or scissors
                    // Outputs your choice in an alert
                    echo "<div class=\"alert alert-dark\" role=\"alert\">You chose $choice!</div>";

                    // Switch case for the choice of the computer and assign it to a word
                    // If the random number is 0 it means rock
                    // If the random number is 1 it means paper
                    // If the random number is 2 it means scissors
                    switch ($compChoice){
                        case 0:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chose rock!</div>";
                            break;
                        case 1:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chose paper!</div>";
                            break;
                        case 2:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chose scissors!</div>";
                            break;
                        // No need for default case the variable won't generate a number larger than 2
                    }

                    // Checks if the game is a tie
                    if(($choice == "rock" && $compChoice == 0) || ($choice == "paper" && $compChoice == 1) || ($choice == "scissors" && $compChoice == 3)){
                        echo "<div class=\"alert alert-info\" role=\"alert\">You chose the same as the computer it's a tie!</div>";
                    }else if(($choice == "rock" && $compChoice == 2) || ($choice == "paper" && $compChoice == 0) || ($choice == "scissors" && $compChoice == 1)){
                        // Code if the user wins
                        echo "<div class=\"alert alert-success\" role=\"alert\">You have beaten the computer!</div>";
                    }else{
                        // Code if the computer wins
                        echo "<div class=\"alert alert-danger\" role=\"alert\">The computer beats you!</div>";
                    }
                }else{
                    // This alert will popup when it isn't a valid choice or isn't empty
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice!</div>";
                }
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
