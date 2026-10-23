<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30FilteringDeliveryPackage
{
    public const DELIVERY_PACKAGE_NORMAL_LocalProjectListV30FilteringDeliveryPackage = 'DELIVERY_PACKAGE_NORMAL';
    public const DELIVERY_PACKAGE_UBL_LocalProjectListV30FilteringDeliveryPackage = 'DELIVERY_PACKAGE_UBL';

    public const ALLOWED_VALUES = [
        self::DELIVERY_PACKAGE_NORMAL_LocalProjectListV30FilteringDeliveryPackage,
        self::DELIVERY_PACKAGE_UBL_LocalProjectListV30FilteringDeliveryPackage,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30FilteringDeliveryPackage', $value));
        }
        return (string) $value;
    }
}
