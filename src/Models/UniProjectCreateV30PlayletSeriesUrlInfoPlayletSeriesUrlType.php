<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30PlayletSeriesUrlInfoPlayletSeriesUrlType
{
    public const IAA_UniProjectCreateV30PlayletSeriesUrlInfoPlayletSeriesUrlType = 'IAA';
    public const IAP_UniProjectCreateV30PlayletSeriesUrlInfoPlayletSeriesUrlType = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_UniProjectCreateV30PlayletSeriesUrlInfoPlayletSeriesUrlType,
        self::IAP_UniProjectCreateV30PlayletSeriesUrlInfoPlayletSeriesUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30PlayletSeriesUrlInfoPlayletSeriesUrlType', $value));
        }
        return (string) $value;
    }
}
