<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\TennisGame;


class GameController extends Controller
{

    protected $tennisGame;

    public function __construct(TennisGame $tennisGame)
    {
        $this->tennisGame = $tennisGame;
    }

      public function startGame(Request $request)
    {   
        return view('start_game.index');
    }

      public function addPoint(Request $request,$ForPlayerID,$TotalPlayer1Points,$TotalPlayer2Points)
    {   
        // Assuming $ForPlayerID determines which player's points are being updated
        if ($ForPlayerID == 1) {
            $TotalPlayer1Points++;
        } elseif ($ForPlayerID == 2) {
            $TotalPlayer2Points++;
        }

         // Calculate the new scoreboard using the TennisGame model method
            $scoreboard = $this->tennisGame->scoreboard($TotalPlayer1Points, $TotalPlayer2Points);

            // Determine if either player has Advantage
            $isAdvantagePlayer1 = false;
            $isAdvantagePlayer2 = false;

            if (strpos($scoreboard, 'Advantage Player 1') !== false) {
                $isAdvantagePlayer1 = true;
            } elseif (strpos($scoreboard, 'Advantage Player 2') !== false) {
                $isAdvantagePlayer2 = true;
            }

            // Determine if either player has won
            $isWinnerPlayer1 = false;
            $isWinnerPlayer2 = false;

            if (strpos($scoreboard, 'Player 1 Wins') !== false) {
                $isWinnerPlayer1 = true;
            } elseif (strpos($scoreboard, 'Player 2 Wins') !== false) {
                $isWinnerPlayer2 = true;
            }

            // Determine the textual representation of points for Player 1 and Player 2
            $player1PointsText = $this->tennisGame->getPointsText($TotalPlayer1Points, $isAdvantagePlayer1,$isWinnerPlayer1);
            $player2PointsText = $this->tennisGame->getPointsText($TotalPlayer2Points, $isAdvantagePlayer2,$isWinnerPlayer2);

            //correct score when deuces
            if($scoreboard=='Deuce'){
                $TotalPlayer1Points = 3;
                $TotalPlayer2Points = 3;

                $player1PointsText = "Forty";
                $player2PointsText = "Forty";

            }

            //check if we have a winner 
            $isComplete = $this->tennisGame->isComplete($TotalPlayer1Points, $TotalPlayer2Points);

            // Prepare the response data
            $responseData = [
                'scoreboard' => $scoreboard,
                'player1' => [
                    'points' => $TotalPlayer1Points,
                    'points_text' => $player1PointsText,
                ],
                'player2' => [
                    'points' => $TotalPlayer2Points,
                    'points_text' => $player2PointsText,
                ],
                'isComplete' => $isComplete,
            ];

            // Return the JSON response
            return response()->json($responseData);

     }

}
