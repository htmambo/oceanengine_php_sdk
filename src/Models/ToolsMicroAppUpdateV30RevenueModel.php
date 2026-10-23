<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppUpdateV30RevenueModel
{
    public const IAA_ToolsMicroAppUpdateV30RevenueModel = 'IAA';
    public const IAAP_ToolsMicroAppUpdateV30RevenueModel = 'IAAP';
    public const IAP_ToolsMicroAppUpdateV30RevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsMicroAppUpdateV30RevenueModel,
        self::IAAP_ToolsMicroAppUpdateV30RevenueModel,
        self::IAP_ToolsMicroAppUpdateV30RevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppUpdateV30RevenueModel', $value));
        }
        return (string) $value;
    }
}
