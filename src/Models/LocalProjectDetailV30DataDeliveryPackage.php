<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataDeliveryPackage
{
    public const DELIVERY_PACKAGE_NORMAL_LocalProjectDetailV30DataDeliveryPackage = 'DELIVERY_PACKAGE_NORMAL';
    public const DELIVERY_PACKAGE_UBL_LocalProjectDetailV30DataDeliveryPackage = 'DELIVERY_PACKAGE_UBL';

    public const ALLOWED_VALUES = [
        self::DELIVERY_PACKAGE_NORMAL_LocalProjectDetailV30DataDeliveryPackage,
        self::DELIVERY_PACKAGE_UBL_LocalProjectDetailV30DataDeliveryPackage,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataDeliveryPackage', $value));
        }
        return (string) $value;
    }
}
