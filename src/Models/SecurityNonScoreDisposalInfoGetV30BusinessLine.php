<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityNonScoreDisposalInfoGetV30BusinessLine
{
    public const AD_SecurityNonScoreDisposalInfoGetV30BusinessLine = 'AD';
    public const LOCALAD_SecurityNonScoreDisposalInfoGetV30BusinessLine = 'LOCALAD';
    public const QIANCHUAN_SecurityNonScoreDisposalInfoGetV30BusinessLine = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SecurityNonScoreDisposalInfoGetV30BusinessLine,
        self::LOCALAD_SecurityNonScoreDisposalInfoGetV30BusinessLine,
        self::QIANCHUAN_SecurityNonScoreDisposalInfoGetV30BusinessLine,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityNonScoreDisposalInfoGetV30BusinessLine', $value));
        }
        return (string) $value;
    }
}
