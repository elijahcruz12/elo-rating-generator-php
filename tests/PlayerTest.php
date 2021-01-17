<?php


namespace EloRating\Tests;


use EloRating\Match;
use EloRating\Player;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    
    /**
     * Check if Match Loads
     * @test
     */
    public function checkIfClassLoads(){
       $playerOne = new Player(1400);
       
       $this->assertEquals(1400, $playerOne->getRating());
    }
    
}
