<?php

namespace App\Classes\Spells\Defensive;

use App\CLasses\Spells\Spell;
abstract class Defensive extends Spell{

    public function __construct(
        public string $spellName,
        public string $description,
        public int $cost,
        public float $defense,
        public string $factor, //ratio or fixed
        public ?array $owners,
    )
    {
        parent::__construct($spellName, $description, $cost, $owners);
    }
}