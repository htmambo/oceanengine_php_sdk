<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidCreateV30JointScopeInfoShopScopeOperator
{
    public const EXCLUDE_ToolsJointBidCreateV30JointScopeInfoShopScopeOperator = 'EXCLUDE';
    public const INCLUDE_ToolsJointBidCreateV30JointScopeInfoShopScopeOperator = 'INCLUDE';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_ToolsJointBidCreateV30JointScopeInfoShopScopeOperator,
        self::INCLUDE_ToolsJointBidCreateV30JointScopeInfoShopScopeOperator,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidCreateV30JointScopeInfoShopScopeOperator', $value));
        }
        return (string) $value;
    }
}
