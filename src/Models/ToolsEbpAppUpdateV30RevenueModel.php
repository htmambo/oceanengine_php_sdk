<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30RevenueModel
{
    public const IAA_ToolsEbpAppUpdateV30RevenueModel = 'IAA';
    public const IAAP_ToolsEbpAppUpdateV30RevenueModel = 'IAAP';
    public const IAP_ToolsEbpAppUpdateV30RevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsEbpAppUpdateV30RevenueModel,
        self::IAAP_ToolsEbpAppUpdateV30RevenueModel,
        self::IAP_ToolsEbpAppUpdateV30RevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30RevenueModel', $value));
        }
        return (string) $value;
    }
}
