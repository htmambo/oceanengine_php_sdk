<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30FrequencyInfoFrequencyStatus
{
    public const DISABLE_BrandOrderCreateV30FrequencyInfoFrequencyStatus = 'DISABLE';
    public const ENABLE_BrandOrderCreateV30FrequencyInfoFrequencyStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_BrandOrderCreateV30FrequencyInfoFrequencyStatus,
        self::ENABLE_BrandOrderCreateV30FrequencyInfoFrequencyStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30FrequencyInfoFrequencyStatus', $value));
        }
        return (string) $value;
    }
}
