<?php

do {
    $playerOne = readline('Player 1 (X) - Digite seu nome: ');
    $playerTwo = readline('Player 2 (O) - Digite seu nome: ');

    $player = 'X';

    $board = [
        '.', '.', '.',
        '.', '.', '.',
        '.', '.', '.'
    ];

    $winner = null;
    while ($winner === null) {
        echo <<<EOL
            Posições: | Tabuleiro
                      |            
            0|1|2     | $board[0]|$board[1]|$board[2]
            3|4|5     | $board[3]|$board[4]|$board[5]
            6|7|8     | $board[6]|$board[7]|$board[8]



            EOL;

        $position = (int) readline("Player {$player}, digite sua posição: ");
        if (!in_Array($position, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
            echo "\nPosição inexistente, digite novamente.\n";
            continue;
        }
        if ($board[$position] !== '.') {
            echo "\nPosição ocupada, digite novamente.\n";
            continue;
        }

        $board[$position] = $player;


        if (
            ($board[0] === 'X' && $board[1] === 'X' && $board[2] === 'X') ||
            ($board[3] === 'X' && $board[4] === 'X' && $board[5] === 'X') ||
            ($board[6] === 'X' && $board[7] === 'X' && $board[8] === 'X') ||
            ($board[0] === 'X' && $board[3] === 'X' && $board[6] === 'X') ||
            ($board[1] === 'X' && $board[4] === 'X' && $board[7] === 'X') ||
            ($board[2] === 'X' && $board[5] === 'X' && $board[8] === 'X') ||
            ($board[0] === 'X' && $board[4] === 'X' && $board[8] === 'X') ||
            ($board[2] === 'X' && $board[4] === 'X' && $board[6] === 'X')
        ) {
            $winner = 'X';
            break;
        }

        if (
            ($board[0] === 'O' && $board[1] === '0' && $board[2] === '0') ||
            ($board[3] === 'O' && $board[4] === '0' && $board[5] === '0') ||
            ($board[6] === 'O' && $board[7] === '0' && $board[8] === '0') ||
            ($board[0] === 'O' && $board[3] === '0' && $board[6] === '0') ||
            ($board[1] === 'O' && $board[4] === '0' && $board[7] === '0') ||
            ($board[2] === 'O' && $board[5] === '0' && $board[8] === '0') ||
            ($board[0] === 'O' && $board[4] === '0' && $board[8] === '0') ||
            ($board[2] === 'O' && $board[4] === '0' && $board[6] === '0')
        ) {
            $winner = '0';
            break;
        }

        if (!in_array('.', $board)) {
            break;
        }
        if ($player === 'X') {
            $player = 'O';
        } else {
            $player = 'X';
        }
    }

    echo <<<EOL
    Posições: | Tabuleiro
    0|1|2     | $board[0]|$board[1]|$board[2]
    3|4|5     | $board[3]|$board[4]|$board[5]
    6|7|8     | $board[6]|$board[7]|$board[8]
    EOL;

    if ($winner === 'X') {
        echo "Vencedor: {$playerOne}.\n";
    } elseif ($winner === 'O') {
        echo "Vencedor: {$playerTwo}.\n";
    } else {
        echo "EMPATE.\n";
    }

    $playAgain = filter_var(
        readline("\nDeseja jogar novamente? (true/false): "),
        FILTER_VALIDATE_BOOLEAN
    );

    echo "\n";
} while ($playAgain === true);
