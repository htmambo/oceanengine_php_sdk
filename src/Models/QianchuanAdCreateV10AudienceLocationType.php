<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceLocationType
{
    public const ALL_QianchuanAdCreateV10AudienceLocationType = 'ALL';
    public const CURRENT_QianchuanAdCreateV10AudienceLocationType = 'CURRENT';
    public const HOME_QianchuanAdCreateV10AudienceLocationType = 'HOME';
    public const TRAVEL_QianchuanAdCreateV10AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdCreateV10AudienceLocationType,
        self::CURRENT_QianchuanAdCreateV10AudienceLocationType,
        self::HOME_QianchuanAdCreateV10AudienceLocationType,
        self::TRAVEL_QianchuanAdCreateV10AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
