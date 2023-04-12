<?php 

namespace App\Enums;

enum AddressPermanentEnum: int {
    case NOT_SAME = 0;
    case SAME = 1;

    public function notSame(): bool
    {
        return $this === self::NOT_SAME;
    }

    public function same(): bool
    {
        return $this === self::SAME;
    }
}