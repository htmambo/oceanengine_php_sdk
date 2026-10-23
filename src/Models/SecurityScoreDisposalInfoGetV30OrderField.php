<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreDisposalInfoGetV30OrderField
{
    public const DISPOSAL_START_TIME_SecurityScoreDisposalInfoGetV30OrderField = 'disposal_start_time';
    public const DISPOSAL_END_TIME_SecurityScoreDisposalInfoGetV30OrderField = 'disposal_end_time';

    public const ALLOWED_VALUES = [
        self::DISPOSAL_START_TIME_SecurityScoreDisposalInfoGetV30OrderField,
        self::DISPOSAL_END_TIME_SecurityScoreDisposalInfoGetV30OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreDisposalInfoGetV30OrderField', $value));
        }
        return (string) $value;
    }
}
