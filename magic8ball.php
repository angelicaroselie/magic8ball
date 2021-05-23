<?php

//Clear function for terminal. Works in DOS and UNIX
function clearTerminal() {
  $os = (stripos(PHP_OS, "WIN") === 0) ? "DOS" : "UNIX";
  
  if ($os === "DOS") {
    return system('cls');
  } else {
    return system('clear');
  }
}


//Gameplay function
function magic8Ball(){

  //Running while true
  $run = true; 
  while ($run) {

    echo "\n~~~~~~~The Magic 8 ball~~~~~~~";
    echo "\n\n";
    echo "Enter your question (press enter to exit).\n";
    $question = readline(">> ");

    //Checking if $question is empty. If empty, break function from running
    if(empty($question)){
      $run = false;
      break;
    }

    echo "\nThe question is... " . $question . "\n";

    //Creating random between 0 to 19
    $random = rand(0, 19);

    //Used to debugging. Displaying the random, now commented out
    //echo $random . "\n"; 

    //Switch function for every random cases
    switch($random){
      case 0:
        echo "The answer is... it is certain.\n";
        break;
      case 1:
        echo "The answer is... it is decidedly so.\n";
        break;
      case 2:
        echo "The answer is... without a doubt.\n";
        break;
      case 3:
        echo "The answer is... yes - definitely.\n";
        break;
      case 4:
        echo "The answer is... You may rely on it.\n";
        break;
      case 5:
        echo "The answer is... as I see it, yes.\n";
        break;
      case 6:
        echo "The answer is... most likely.\n";
        break;
      case 7:
        echo "The answer is... outlook good.\n";
        break;
      case 8:
        echo "The answer is... yes\n";
        break;
      case 9:
        echo "The answer is... signs point to yes.\n";
        break;
      case 10:
        echo "The answer is... reply hazy, try again.\n";
        break;
      case 11:
        echo "The answer is... ask again later.\n";
        break;
      case 12:
        echo "The answer is... better not tell you now.\n";
        break;
      case 13:
        echo "The answer is... cannot predict now.\n";
        break;
      case 14:
        echo "The answer is... concentrate and ask again.\n";
        break;
      case 15:
        echo "The answer is... don't count on it.\n";
        break;
      case 16:
        echo "The answer is... my reply is no.\n";
        break;
      case 17:
        echo "The answer is... my sources say no.\n";
        break;
      case 18:
        echo "The answer is... outlook not so good.\n";
        break;
      case 19:
        echo "The answer is... very doubtful.\n";
        break;
      default:
        break;
    }
    
    readline("\nPress enter to continue...");

    clearTerminal(); //Clearing terminal
  }
}

//Run the function
magic8Ball();

