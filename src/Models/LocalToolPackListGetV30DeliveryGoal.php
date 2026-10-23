<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalToolPackListGetV30DeliveryGoal
{
    public const POI_LocalToolPackListGetV30DeliveryGoal = 'POI';
    public const PRODUCT_LocalToolPackListGetV30DeliveryGoal = 'PRODUCT';

    public const ALLOWED_VALUES = [
        self::POI_LocalToolPackListGetV30DeliveryGoal,
        self::PRODUCT_LocalToolPackListGetV30DeliveryGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalToolPackListGetV30DeliveryGoal', $value));
        }
        return (string) $value;
    }
}
