<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRegionUpdateV10District
{
    public const CITY_QianchuanAdRegionUpdateV10District = 'CITY';
    public const COUNTY_QianchuanAdRegionUpdateV10District = 'COUNTY';
    public const NONE_QianchuanAdRegionUpdateV10District = 'NONE';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanAdRegionUpdateV10District,
        self::COUNTY_QianchuanAdRegionUpdateV10District,
        self::NONE_QianchuanAdRegionUpdateV10District,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRegionUpdateV10District', $value));
        }
        return (string) $value;
    }
}
