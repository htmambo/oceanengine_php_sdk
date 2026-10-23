<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaBrandAdvAuthFuzzyGetV30BrandDataSourceList
{
    public const YUNTU_DpaBrandAdvAuthFuzzyGetV30BrandDataSourceList = 'YUNTU';

    public const ALLOWED_VALUES = [
        self::YUNTU_DpaBrandAdvAuthFuzzyGetV30BrandDataSourceList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaBrandAdvAuthFuzzyGetV30BrandDataSourceList', $value));
        }
        return (string) $value;
    }
}
