<?php 

namespace App\Enums;

enum ProfileOpenForWorkEnum: int {
    case NO = 0;
    case YES = 1;

    public function no(): bool
    {
        return $this === self::NO;
    }

    public function yes(): bool
    {
        return $this === self::YES;
    }
}