<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreViolationEventGetV30BusinessLine
{
    public const AD_SecurityScoreViolationEventGetV30BusinessLine = 'AD';
    public const LOCALAD_SecurityScoreViolationEventGetV30BusinessLine = 'LOCALAD';
    public const QIANCHUAN_SecurityScoreViolationEventGetV30BusinessLine = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SecurityScoreViolationEventGetV30BusinessLine,
        self::LOCALAD_SecurityScoreViolationEventGetV30BusinessLine,
        self::QIANCHUAN_SecurityScoreViolationEventGetV30BusinessLine,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreViolationEventGetV30BusinessLine', $value));
        }
        return (string) $value;
    }
}
