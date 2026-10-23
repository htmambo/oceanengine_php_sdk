<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidUpdateV30JointScopeInfoShopScopeDimension
{
    public const ADVERTISER_ID_ToolsJointBidUpdateV30JointScopeInfoShopScopeDimension = 'ADVERTISER_ID';
    public const CUSTOMER_ID_ToolsJointBidUpdateV30JointScopeInfoShopScopeDimension = 'CUSTOMER_ID';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ID_ToolsJointBidUpdateV30JointScopeInfoShopScopeDimension,
        self::CUSTOMER_ID_ToolsJointBidUpdateV30JointScopeInfoShopScopeDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidUpdateV30JointScopeInfoShopScopeDimension', $value));
        }
        return (string) $value;
    }
}
