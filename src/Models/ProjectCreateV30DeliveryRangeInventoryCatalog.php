<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliveryRangeInventoryCatalog
{
    public const MANUAL_ProjectCreateV30DeliveryRangeInventoryCatalog = 'MANUAL';
    public const UNIVERSAL_SMART_ProjectCreateV30DeliveryRangeInventoryCatalog = 'UNIVERSAL_SMART';

    public const ALLOWED_VALUES = [
        self::MANUAL_ProjectCreateV30DeliveryRangeInventoryCatalog,
        self::UNIVERSAL_SMART_ProjectCreateV30DeliveryRangeInventoryCatalog,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliveryRangeInventoryCatalog', $value));
        }
        return (string) $value;
    }
}
