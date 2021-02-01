<?php


namespace EloRating\Tests;


use EloRating\Game;
use EloRating\Player;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    
    /**
     * Check if Game Loads
     * @test
     */
    public function checkIfClassLoads(){
       $playerOne = new Player(1400);
       
       $this->assertEquals(1400, $playerOne->getRating());
    }
    
}
