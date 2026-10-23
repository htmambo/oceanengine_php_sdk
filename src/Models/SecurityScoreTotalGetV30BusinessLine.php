<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreTotalGetV30BusinessLine
{
    public const AD_SecurityScoreTotalGetV30BusinessLine = 'AD';
    public const LOCALAD_SecurityScoreTotalGetV30BusinessLine = 'LOCALAD';
    public const QIANCHUAN_SecurityScoreTotalGetV30BusinessLine = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SecurityScoreTotalGetV30BusinessLine,
        self::LOCALAD_SecurityScoreTotalGetV30BusinessLine,
        self::QIANCHUAN_SecurityScoreTotalGetV30BusinessLine,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreTotalGetV30BusinessLine', $value));
        }
        return (string) $value;
    }
}
