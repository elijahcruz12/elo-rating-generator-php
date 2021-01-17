# ELO Rating Generating Class

This is a simple class that allows you to generate an ELO rating for two chess players after a match. Defaults are set to make things even easier. It is also two Class file as well, so check out the source to see how simple it is to work with. 

PLEASE NOTE THAT VERSION TWO IS NOT COMPATIBLE WITH VERSION ONE.

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

```
composer require elijahcruz/elo-rating "dev-master"
```


## Usage

First, create two players with current ratings. This allows you to get their ratings in a quick way:

```php
use EloRating\Player;

$player1 = new Player(1200);
$player2 = new Player(800);
```

Next create a match.

```php
use EloRating\Match;

$match = new Match($player1, $player2);
```

If you chose to set the K for the ELO Score, you can, however the default K is 32:

```php
$match->setK(16);
```

After the match is complete, you can set the score and run the count method to recaculate the new scores. The score is done for player one, then player two.

```php
$match->setScore(0, 1)
   ->count();
```

Get players:

```php
$player1 = $match->getPlayer1();
$player2 = $match->getPlayer2();
```

Get their new ratings after the match:

```php
$newRating1 = $player1->getRating();
$newRating2 = $player2->getRating();
```
