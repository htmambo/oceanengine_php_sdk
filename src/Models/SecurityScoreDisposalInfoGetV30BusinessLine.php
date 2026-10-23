<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreDisposalInfoGetV30BusinessLine
{
    public const AD_SecurityScoreDisposalInfoGetV30BusinessLine = 'AD';
    public const LOCALAD_SecurityScoreDisposalInfoGetV30BusinessLine = 'LOCALAD';
    public const QIANCHUAN_SecurityScoreDisposalInfoGetV30BusinessLine = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SecurityScoreDisposalInfoGetV30BusinessLine,
        self::LOCALAD_SecurityScoreDisposalInfoGetV30BusinessLine,
        self::QIANCHUAN_SecurityScoreDisposalInfoGetV30BusinessLine,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreDisposalInfoGetV30BusinessLine', $value));
        }
        return (string) $value;
    }
}
