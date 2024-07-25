<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse; // Import JsonResponse
use App\Models\TennisGame;

class GameControllerTest extends TestCase
{


        public function testAddPointPlayer1()
        {
            // Mocking TennisGame model
            $tennisGameMock = $this->createMock(TennisGame::class);
            
            // Mock scoreboard method
            $tennisGameMock->expects($this->any())
                           ->method('scoreboard')
                           ->willReturn('Fifteen - Love'); // Adjust based on your test case
            
            // Mock getPointsText method
            $tennisGameMock->expects($this->any())
                           ->method('getPointsText')
                           ->willReturnOnConsecutiveCalls('Fifteen', 'Love'); // Adjust based on your test case
            
            // Mock isComplete method
            $tennisGameMock->expects($this->any())
                           ->method('isComplete')
                           ->willReturn(false); // Adjust based on your test case
            
            // Creating GameController instance with mocked TennisGame
            $controller = new GameController($tennisGameMock);
            
            // Simulate the request
            $request = Request::create('/api/add_point/1/0/0', 'GET');
            
            // Call the method under test
            $response = $controller->addPoint($request, 1, 0, 0);
            
            // Assert instance of JsonResponse
            $this->assertInstanceOf(JsonResponse::class, $response);
            
            // Assert JSON response content
            $responseData = $response->getContent(); // Get the JSON content from the response
            
            $expectedData = [
                'scoreboard' => 'Fifteen - Love',
                'player1' => [
                    'points' => 1,
                    'points_text' => 'Fifteen',
                ],
                'player2' => [
                    'points' => 0,
                    'points_text' => 'Love',
                ],
                'isComplete' => false,
            ];
            
            $this->assertJsonStringEqualsJsonString(json_encode($expectedData), $responseData);
            
            // Additional assertions if needed
        }
    
    // Write similar tests for other scenarios (e.g., Player 2, Deuce, game completion)
}
