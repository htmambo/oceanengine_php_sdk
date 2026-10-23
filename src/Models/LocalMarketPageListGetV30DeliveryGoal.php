<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalMarketPageListGetV30DeliveryGoal
{
    public const POI_LocalMarketPageListGetV30DeliveryGoal = 'POI';
    public const PRODUCT_LocalMarketPageListGetV30DeliveryGoal = 'PRODUCT';

    public const ALLOWED_VALUES = [
        self::POI_LocalMarketPageListGetV30DeliveryGoal,
        self::PRODUCT_LocalMarketPageListGetV30DeliveryGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalMarketPageListGetV30DeliveryGoal', $value));
        }
        return (string) $value;
    }
}
