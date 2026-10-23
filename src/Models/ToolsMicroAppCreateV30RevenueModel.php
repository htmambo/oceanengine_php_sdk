<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppCreateV30RevenueModel
{
    public const IAA_ToolsMicroAppCreateV30RevenueModel = 'IAA';
    public const IAAP_ToolsMicroAppCreateV30RevenueModel = 'IAAP';
    public const IAP_ToolsMicroAppCreateV30RevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsMicroAppCreateV30RevenueModel,
        self::IAAP_ToolsMicroAppCreateV30RevenueModel,
        self::IAP_ToolsMicroAppCreateV30RevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppCreateV30RevenueModel', $value));
        }
        return (string) $value;
    }
}
