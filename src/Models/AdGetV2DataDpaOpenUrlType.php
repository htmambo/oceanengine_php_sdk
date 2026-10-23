<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataDpaOpenUrlType
{
    public const DPA_AdGetV2DataDpaOpenUrlType = 'DPA';
    public const CUSTOM_AdGetV2DataDpaOpenUrlType = 'CUSTOM';
    public const NONE_AdGetV2DataDpaOpenUrlType = 'NONE';

    public const ALLOWED_VALUES = [
        self::DPA_AdGetV2DataDpaOpenUrlType,
        self::CUSTOM_AdGetV2DataDpaOpenUrlType,
        self::NONE_AdGetV2DataDpaOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataDpaOpenUrlType', $value));
        }
        return (string) $value;
    }
}
