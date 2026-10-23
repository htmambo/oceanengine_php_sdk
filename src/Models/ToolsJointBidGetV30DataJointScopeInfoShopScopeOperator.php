<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator
{
    public const EXCLUDE_ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator = 'EXCLUDE';
    public const INCLUDE_ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator = 'INCLUDE';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator,
        self::INCLUDE_ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator', $value));
        }
        return (string) $value;
    }
}
