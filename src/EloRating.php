<?php
namespace EloRating\EloRating;

class EloRating
{
    
    /**
     * @var int
     */
    public $k = 32; // ICC uses 32 as it's K
    /**
     * @var float|int
     */
    public $player_rating_one;
    /**
     * @var float|int
     */
    public $player_rating_two;
    /**
     * @var float|int
     */
    protected $player_expected_one;
    /**
     * @var float|int
     */
    public $player_expected_two;
    
    
    /**
     * EloRating constructor.
     * @param  int  $player_rating_one
     * @param  int  $player_rating_two
     */
    public function __construct(int $player_rating_one, int $player_rating_two){
        $one = $player_rating_one / 400;
        $two = $player_rating_two / 400;
        $this->player_rating_one = pow(10, $one);
        $this->player_rating_two = pow(10, $two);
        
        $this->player_expected_one = $player_rating_one / ($player_rating_one + $player_rating_two);
        $this->player_expected_two = $player_rating_two  / ($player_rating_two + $player_rating_one);
    }
    
    /**
     *
     */
    public function player_two_wins(){
        $this->player_rating_one = $this->player_rating_one + $this->k * (0 - $this->player_expected_one);
        $this->player_rating_two = $this->player_rating_two + $this->k * (1 - $this->player_expected_two);
    }
    
    /**
     *
     */
    public function draw(){
        $this->player_rating_one = $this->player_rating_one + $this->k * (0.5 - $this->player_expected_one);
        $this->player_rating_two = $this->player_rating_two + $this->k * (0.5 - $this->player_expected_two);
    }
    
    /**
     *
     */
    public function outcome(){
        $array['player_one'] = $this->player_rating_one;
        $array['player_two'] = $this->player_rating_two;
    }

}
