<?php
namespace App\Models;

class TennisGame
{
    public function scoreboard($player1Points, $player2Points)
    {
        // Define the score terms
        $scoreTerms = [
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty'
        ];

        // Check if scores are equal and below 'Forty'
        if ($player1Points == $player2Points && $player1Points < 3) {
            return $scoreTerms[$player1Points] . ' All';
        }

        // Check for Deuce
        if ($player1Points >= 3 && $player2Points >= 3 && $player1Points == $player2Points) {
            return 'Deuce';
        }

        // Check for Advantage or Win
        if ($player1Points >= 4 || $player2Points >= 4) {
            $difference = $player1Points - $player2Points;
            if ($difference == 1) {
                return 'Advantage Player 1'; // Change as per your requirement
            } elseif ($difference == -1) {
                return 'Advantage Player 2'; // Change as per your requirement
            } elseif ($difference >= 2) {
                return 'Player 1 Wins'; // Change as per your requirement
            } elseif ($difference <= -2) {
                return 'Player 2 Wins'; // Change as per your requirement
            }
        }

        // Default case, return the score terms
        $score1 = isset($scoreTerms[$player1Points]) ? $scoreTerms[$player1Points] : '';
        $score2 = isset($scoreTerms[$player2Points]) ? $scoreTerms[$player2Points] : '';

        return $score1 . ' - ' . $score2;
    }

    public function getPointsText($points, $isAdvantage = false, $isWinner = false)
    {
        $scoreTerms = [
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty'
        ];

        if ($isAdvantage) {
            return 'Advantage';
        }

        if ($isWinner) {
            return 'Winner';
        }

        return isset($scoreTerms[$points]) ? $scoreTerms[$points] : '';
    }


    public function isComplete($player1Points, $player2Points)
    {
        if ($player1Points >= 4 || $player2Points >= 4) {
            $difference = $player1Points - $player2Points;
            if ($difference >= 2) {
                return true;
            } elseif ($difference <= -2) {
                return true;
            }
        }

        return false; // No winner yet
    }

}
