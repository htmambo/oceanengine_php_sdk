<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppListV30DataListRevenueModel
{
    public const IAA_ToolsMicroAppListV30DataListRevenueModel = 'IAA';
    public const IAAP_ToolsMicroAppListV30DataListRevenueModel = 'IAAP';
    public const IAP_ToolsMicroAppListV30DataListRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsMicroAppListV30DataListRevenueModel,
        self::IAAP_ToolsMicroAppListV30DataListRevenueModel,
        self::IAP_ToolsMicroAppListV30DataListRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppListV30DataListRevenueModel', $value));
        }
        return (string) $value;
    }
}
