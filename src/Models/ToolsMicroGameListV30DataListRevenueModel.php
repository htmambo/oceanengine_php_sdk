<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameListV30DataListRevenueModel
{
    public const IAA_ToolsMicroGameListV30DataListRevenueModel = 'IAA';
    public const IAAP_ToolsMicroGameListV30DataListRevenueModel = 'IAAP';
    public const IAP_ToolsMicroGameListV30DataListRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsMicroGameListV30DataListRevenueModel,
        self::IAAP_ToolsMicroGameListV30DataListRevenueModel,
        self::IAP_ToolsMicroGameListV30DataListRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameListV30DataListRevenueModel', $value));
        }
        return (string) $value;
    }
}
