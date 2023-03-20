<?php 

namespace App\Enums;

enum StandardStatusEnum: int {
    case INACTIVE = 0;
    case ACTIVE = 1;

    public function inactive(): bool
    {
        return $this === self::INACTIVE;
    }

    public function active(): bool
    {
        return $this === self::ACTIVE;
    }
}