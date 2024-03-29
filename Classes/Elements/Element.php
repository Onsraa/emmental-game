<?php

namespace App\Classes\Elements;

class Element
{
    public function __construct(
        private ?string $element = null // the element which will define who he is weak against
    ) {
    }

    public function compatibility(Element $targettedElement): ?string
    { //return "efficient" | "ineffective" | null

        $elementCompatibility = ["fire" => "plant", "plant" => "water", "water" => "fire"];

        $currentElement = $this->element;
        $otherElement = $targettedElement->element;

        foreach ($elementCompatibility as $key => $value) {
            if ($key == $currentElement && $value == $otherElement || $currentElement == $targettedElement) {
                return "efficient";
            } else if (
                $key == $otherElement && $value == $currentElement
            ) {
                return "ineffective";
            }
        }
        return null;
    }
}