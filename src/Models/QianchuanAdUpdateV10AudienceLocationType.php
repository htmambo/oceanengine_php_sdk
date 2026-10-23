<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceLocationType
{
    public const ALL_QianchuanAdUpdateV10AudienceLocationType = 'ALL';
    public const CURRENT_QianchuanAdUpdateV10AudienceLocationType = 'CURRENT';
    public const HOME_QianchuanAdUpdateV10AudienceLocationType = 'HOME';
    public const TRAVEL_QianchuanAdUpdateV10AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdUpdateV10AudienceLocationType,
        self::CURRENT_QianchuanAdUpdateV10AudienceLocationType,
        self::HOME_QianchuanAdUpdateV10AudienceLocationType,
        self::TRAVEL_QianchuanAdUpdateV10AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
