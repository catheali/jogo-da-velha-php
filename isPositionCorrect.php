<?php

/**
 * @param integer $position
 * @param array<string> $board
 * @return boolean
 */

 function isPositionCorrect(int $position, array $board): bool
 {
    if (!in_Array($position, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
        echo "\nPosição inexistente, digite novamente.\n";
        return false;
    }
    if ($board[$position] !== BLANK_ICON) {
        echo "\nPosição ocupada, digite novamente.\n";
        return false;
    }
    return true;
 }