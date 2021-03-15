<?php

namespace App\Fight;

use App\Entity\CharacterInterface;

class FightSimulator
{
    public function simulate(CharacterInterface $character, CharacterInterface $character2): FightResult
    {
        $turns = 0;
        while (!$character->isDead() || !$character2->isDead()) {
            $turns++;
            $character->attack($character2);
            $character2->attack($character);
        }

        $fightResult = new FightResult();
        $fightResult->turns = $turns;

        if (!$character->isDead() && $character2->isDead()) {
            $fightResult->winner = $character;
        }

        if (!$character2->isDead() && $character->isDead()) {
            $fightResult->winner = $character2;
        }
    }
}
