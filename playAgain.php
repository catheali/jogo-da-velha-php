<?php

function playAgain(): bool
{
    $result = readline("\nDeseja jogar novamente? (s/n): ");
    if($result == 's'){
        return true;
    } else {
        return false;
    }
}