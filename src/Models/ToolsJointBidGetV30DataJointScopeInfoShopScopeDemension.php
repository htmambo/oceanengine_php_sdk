<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension
{
    public const ADVERTISER_ID_ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension = 'ADVERTISER_ID';
    public const CUSTOMER_ID_ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension = 'CUSTOMER_ID';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ID_ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension,
        self::CUSTOMER_ID_ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension', $value));
        }
        return (string) $value;
    }
}
