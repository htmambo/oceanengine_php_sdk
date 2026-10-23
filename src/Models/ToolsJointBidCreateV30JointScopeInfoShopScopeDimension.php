<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidCreateV30JointScopeInfoShopScopeDimension
{
    public const ADVERTISER_ID_ToolsJointBidCreateV30JointScopeInfoShopScopeDimension = 'ADVERTISER_ID';
    public const CUSTOMER_ID_ToolsJointBidCreateV30JointScopeInfoShopScopeDimension = 'CUSTOMER_ID';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ID_ToolsJointBidCreateV30JointScopeInfoShopScopeDimension,
        self::CUSTOMER_ID_ToolsJointBidCreateV30JointScopeInfoShopScopeDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidCreateV30JointScopeInfoShopScopeDimension', $value));
        }
        return (string) $value;
    }
}
