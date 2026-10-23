<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameUpdateV30RevenueModel
{
    public const IAA_ToolsMicroGameUpdateV30RevenueModel = 'IAA';
    public const IAAP_ToolsMicroGameUpdateV30RevenueModel = 'IAAP';
    public const IAP_ToolsMicroGameUpdateV30RevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsMicroGameUpdateV30RevenueModel,
        self::IAAP_ToolsMicroGameUpdateV30RevenueModel,
        self::IAP_ToolsMicroGameUpdateV30RevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameUpdateV30RevenueModel', $value));
        }
        return (string) $value;
    }
}
