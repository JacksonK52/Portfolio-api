<?php 

namespace App\Enums;

enum SkillApprovedEnum: int {
    case NO = 0;
    case YES = 1;

    public function inactive(): bool
    {
        return $this === self::NO;
    }

    public function active(): bool
    {
        return $this === self::YES;
    }
}