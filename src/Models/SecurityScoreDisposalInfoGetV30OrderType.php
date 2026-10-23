<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreDisposalInfoGetV30OrderType
{
    public const ASC_SecurityScoreDisposalInfoGetV30OrderType = 'ASC';
    public const DESC_SecurityScoreDisposalInfoGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_SecurityScoreDisposalInfoGetV30OrderType,
        self::DESC_SecurityScoreDisposalInfoGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreDisposalInfoGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
