<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliveryRangeInventoryCatalog
{
    public const MANUAL_ProjectListV30DataListDeliveryRangeInventoryCatalog = 'MANUAL';
    public const SCENE_ProjectListV30DataListDeliveryRangeInventoryCatalog = 'SCENE';
    public const SMART_ProjectListV30DataListDeliveryRangeInventoryCatalog = 'SMART';
    public const UNIVERSAL_ProjectListV30DataListDeliveryRangeInventoryCatalog = 'UNIVERSAL';
    public const UNIVERSAL_SMART_ProjectListV30DataListDeliveryRangeInventoryCatalog = 'UNIVERSAL_SMART';

    public const ALLOWED_VALUES = [
        self::MANUAL_ProjectListV30DataListDeliveryRangeInventoryCatalog,
        self::SCENE_ProjectListV30DataListDeliveryRangeInventoryCatalog,
        self::SMART_ProjectListV30DataListDeliveryRangeInventoryCatalog,
        self::UNIVERSAL_ProjectListV30DataListDeliveryRangeInventoryCatalog,
        self::UNIVERSAL_SMART_ProjectListV30DataListDeliveryRangeInventoryCatalog,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliveryRangeInventoryCatalog', $value));
        }
        return (string) $value;
    }
}
