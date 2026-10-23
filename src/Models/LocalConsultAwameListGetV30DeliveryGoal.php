<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalConsultAwameListGetV30DeliveryGoal
{
    public const POI_LocalConsultAwameListGetV30DeliveryGoal = 'POI';
    public const PRODUCT_LocalConsultAwameListGetV30DeliveryGoal = 'PRODUCT';

    public const ALLOWED_VALUES = [
        self::POI_LocalConsultAwameListGetV30DeliveryGoal,
        self::PRODUCT_LocalConsultAwameListGetV30DeliveryGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalConsultAwameListGetV30DeliveryGoal', $value));
        }
        return (string) $value;
    }
}
