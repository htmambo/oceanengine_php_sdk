<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30DeliveryPackage
{
    public const DELIVERY_PACKAGE_NORMAL_LocalProjectCreateV30DeliveryPackage = 'DELIVERY_PACKAGE_NORMAL';
    public const DELIVERY_PACKAGE_UBL_LocalProjectCreateV30DeliveryPackage = 'DELIVERY_PACKAGE_UBL';

    public const ALLOWED_VALUES = [
        self::DELIVERY_PACKAGE_NORMAL_LocalProjectCreateV30DeliveryPackage,
        self::DELIVERY_PACKAGE_UBL_LocalProjectCreateV30DeliveryPackage,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30DeliveryPackage', $value));
        }
        return (string) $value;
    }
}
