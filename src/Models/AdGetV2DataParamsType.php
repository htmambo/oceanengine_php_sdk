<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataParamsType
{
    public const DPA_AdGetV2DataParamsType = 'DPA';
    public const CUSTOM_AdGetV2DataParamsType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::DPA_AdGetV2DataParamsType,
        self::CUSTOM_AdGetV2DataParamsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataParamsType', $value));
        }
        return (string) $value;
    }
}
