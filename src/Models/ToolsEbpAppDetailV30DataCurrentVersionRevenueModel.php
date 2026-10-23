<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionRevenueModel
{
    public const IAA_ToolsEbpAppDetailV30DataCurrentVersionRevenueModel = 'IAA';
    public const IAAP_ToolsEbpAppDetailV30DataCurrentVersionRevenueModel = 'IAAP';
    public const IAP_ToolsEbpAppDetailV30DataCurrentVersionRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsEbpAppDetailV30DataCurrentVersionRevenueModel,
        self::IAAP_ToolsEbpAppDetailV30DataCurrentVersionRevenueModel,
        self::IAP_ToolsEbpAppDetailV30DataCurrentVersionRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionRevenueModel', $value));
        }
        return (string) $value;
    }
}
