<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceLocationType
{
    public const ALL_QianchuanAdDetailGetV10DataAudienceLocationType = 'ALL';
    public const CURRENT_QianchuanAdDetailGetV10DataAudienceLocationType = 'CURRENT';
    public const HOME_QianchuanAdDetailGetV10DataAudienceLocationType = 'HOME';
    public const TRAVEL_QianchuanAdDetailGetV10DataAudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdDetailGetV10DataAudienceLocationType,
        self::CURRENT_QianchuanAdDetailGetV10DataAudienceLocationType,
        self::HOME_QianchuanAdDetailGetV10DataAudienceLocationType,
        self::TRAVEL_QianchuanAdDetailGetV10DataAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
