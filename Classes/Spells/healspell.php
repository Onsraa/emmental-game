<?php

namespace App\Classes\Spells;

use App\Classes\Characters\Character;

abstract class healSpell extends Spell
{
    function __construct(
        public string $spellName,
        public string $description,
        public int $value,
        public int $manaCost,

    ){
        parent::__construct(spellName: $this->spellName, description: $this->description, manacost: $this->manaCost);

    }


}