<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30PlayletSeriesUrlInfoPlayletSeriesUrlType
{
    public const IAA_UniProjectUpdateV30PlayletSeriesUrlInfoPlayletSeriesUrlType = 'IAA';
    public const IAP_UniProjectUpdateV30PlayletSeriesUrlInfoPlayletSeriesUrlType = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_UniProjectUpdateV30PlayletSeriesUrlInfoPlayletSeriesUrlType,
        self::IAP_UniProjectUpdateV30PlayletSeriesUrlInfoPlayletSeriesUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30PlayletSeriesUrlInfoPlayletSeriesUrlType', $value));
        }
        return (string) $value;
    }
}
