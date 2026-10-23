<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListDeliveryPackage
{
    public const DELIVERY_PACKAGE_NORMAL_LocalProjectListV30DataProjectListDeliveryPackage = 'DELIVERY_PACKAGE_NORMAL';
    public const DELIVERY_PACKAGE_UBL_LocalProjectListV30DataProjectListDeliveryPackage = 'DELIVERY_PACKAGE_UBL';

    public const ALLOWED_VALUES = [
        self::DELIVERY_PACKAGE_NORMAL_LocalProjectListV30DataProjectListDeliveryPackage,
        self::DELIVERY_PACKAGE_UBL_LocalProjectListV30DataProjectListDeliveryPackage,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListDeliveryPackage', $value));
        }
        return (string) $value;
    }
}
