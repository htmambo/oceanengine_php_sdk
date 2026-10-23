<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataDeliveryRange
{
    public const DEFAULT_AdGetV2DataDeliveryRange = 'DEFAULT';
    public const UNIVERSAL_AdGetV2DataDeliveryRange = 'UNIVERSAL';
    public const UNION_AdGetV2DataDeliveryRange = 'UNION';

    public const ALLOWED_VALUES = [
        self::DEFAULT_AdGetV2DataDeliveryRange,
        self::UNIVERSAL_AdGetV2DataDeliveryRange,
        self::UNION_AdGetV2DataDeliveryRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataDeliveryRange', $value));
        }
        return (string) $value;
    }
}
