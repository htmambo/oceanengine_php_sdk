<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30FrequencyInfoFrequencyStatus
{
    public const DISABLE_BrandOrderUpdateV30FrequencyInfoFrequencyStatus = 'DISABLE';
    public const ENABLE_BrandOrderUpdateV30FrequencyInfoFrequencyStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_BrandOrderUpdateV30FrequencyInfoFrequencyStatus,
        self::ENABLE_BrandOrderUpdateV30FrequencyInfoFrequencyStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30FrequencyInfoFrequencyStatus', $value));
        }
        return (string) $value;
    }
}
