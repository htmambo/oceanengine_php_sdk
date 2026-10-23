<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListDeliveryGoal
{
    public const POI_LocalOcProjectListV30DataProjectListDeliveryGoal = 'POI';
    public const PRODUCT_LocalOcProjectListV30DataProjectListDeliveryGoal = 'PRODUCT';

    public const ALLOWED_VALUES = [
        self::POI_LocalOcProjectListV30DataProjectListDeliveryGoal,
        self::PRODUCT_LocalOcProjectListV30DataProjectListDeliveryGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListDeliveryGoal', $value));
        }
        return (string) $value;
    }
}
