<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRegionUpdateV10LocationType
{
    public const ALL_QianchuanAdRegionUpdateV10LocationType = 'ALL';
    public const CURRENT_QianchuanAdRegionUpdateV10LocationType = 'CURRENT';
    public const HOME_QianchuanAdRegionUpdateV10LocationType = 'HOME';
    public const TRAVEL_QianchuanAdRegionUpdateV10LocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdRegionUpdateV10LocationType,
        self::CURRENT_QianchuanAdRegionUpdateV10LocationType,
        self::HOME_QianchuanAdRegionUpdateV10LocationType,
        self::TRAVEL_QianchuanAdRegionUpdateV10LocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRegionUpdateV10LocationType', $value));
        }
        return (string) $value;
    }
}
