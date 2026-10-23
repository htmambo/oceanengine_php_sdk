<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataNextVersionRevenueModel
{
    public const IAA_ToolsEbpAppDetailV30DataNextVersionRevenueModel = 'IAA';
    public const IAAP_ToolsEbpAppDetailV30DataNextVersionRevenueModel = 'IAAP';
    public const IAP_ToolsEbpAppDetailV30DataNextVersionRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsEbpAppDetailV30DataNextVersionRevenueModel,
        self::IAAP_ToolsEbpAppDetailV30DataNextVersionRevenueModel,
        self::IAP_ToolsEbpAppDetailV30DataNextVersionRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataNextVersionRevenueModel', $value));
        }
        return (string) $value;
    }
}
