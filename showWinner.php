<?php

/**
 * @param $winner
 * @param array<string> $players
 * @return string 
 */

 function showWinner($winner, array $players): string
 {
    if ($winner === PLAYER_ONE_ICON) {
        return "Vencedor: {$players[0]}.\n";
    } elseif ($winner === PLAYER_TWO_ICON) {
        return "Vencedor: {$players[1]}.\n";
    } else {
        return "EMPATE.\n";
    }
 }