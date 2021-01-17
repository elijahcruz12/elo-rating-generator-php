<?php


namespace EloRating\Tests;


use EloRating\Match;
use EloRating\Player;
use PHPUnit\Framework\TestCase;

class MatchTest extends TestCase
{
    /**
     * @test
     */
    public function checkIfClassLoads()
    {
        $playerOne = new Player(1400);
        $playerTwo = new Player(1400);
        
        $match =  new Match($playerOne, $playerTwo);
        
        $this->assertEquals($match->getPlayer1(), $match->getPlayer2());
    }
    
    /**
     * @test
     */
    public function playerOneWins(){
        $playerOne = new Player(1400);
        $playerTwo = new Player(1400);
    
        $match =  new Match($playerOne, $playerTwo);
        
        $match->setK(32);
        
        // Pretend Game has happened.
        
        $match->setScore(1, 0)->count();
        
        $this->assertGreaterThan(1400, $playerOne->getRating());
        $this->assertLessThan(1400, $playerTwo->getRating());
    }
    
}
