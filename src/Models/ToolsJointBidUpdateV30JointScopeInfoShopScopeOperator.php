<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidUpdateV30JointScopeInfoShopScopeOperator
{
    public const EXCLUDE_ToolsJointBidUpdateV30JointScopeInfoShopScopeOperator = 'EXCLUDE';
    public const INCLUDE_ToolsJointBidUpdateV30JointScopeInfoShopScopeOperator = 'INCLUDE';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_ToolsJointBidUpdateV30JointScopeInfoShopScopeOperator,
        self::INCLUDE_ToolsJointBidUpdateV30JointScopeInfoShopScopeOperator,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidUpdateV30JointScopeInfoShopScopeOperator', $value));
        }
        return (string) $value;
    }
}
