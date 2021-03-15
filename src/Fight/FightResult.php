<?php

namespace App\Fight;

use App\Entity\CharacterInterface;

class FightResult
{
    public ?CharacterInterface $winner;

    public int $turns = 0;

    public function isDraw(): bool
    {
        return $this->winner === null;
    }
}
