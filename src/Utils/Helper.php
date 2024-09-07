<?php

namespace Qstep\Puzzle\Utils;

class Helper
{

    public static function getIntKind(int $x): string
    {
        return $x === 0 ? 'neutral' : ($x > 0 ? 'positive' : 'negative');
    }

}
