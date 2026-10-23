<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataDeliveryGoal
{
    public const POI_LocalOcProjectGetV30DataDeliveryGoal = 'POI';
    public const PRODUCT_LocalOcProjectGetV30DataDeliveryGoal = 'PRODUCT';

    public const ALLOWED_VALUES = [
        self::POI_LocalOcProjectGetV30DataDeliveryGoal,
        self::PRODUCT_LocalOcProjectGetV30DataDeliveryGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataDeliveryGoal', $value));
        }
        return (string) $value;
    }
}
