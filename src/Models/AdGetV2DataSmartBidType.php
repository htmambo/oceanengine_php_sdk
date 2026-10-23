<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataSmartBidType
{
    public const SMART_BID_NO_BID_AdGetV2DataSmartBidType = 'SMART_BID_NO_BID';
    public const SMART_BID_RADICAL_AdGetV2DataSmartBidType = 'SMART_BID_RADICAL';
    public const SMART_BID_CUSTOM_AdGetV2DataSmartBidType = 'SMART_BID_CUSTOM';
    public const SMART_BID_CONSERVATIVE_AdGetV2DataSmartBidType = 'SMART_BID_CONSERVATIVE';

    public const ALLOWED_VALUES = [
        self::SMART_BID_NO_BID_AdGetV2DataSmartBidType,
        self::SMART_BID_RADICAL_AdGetV2DataSmartBidType,
        self::SMART_BID_CUSTOM_AdGetV2DataSmartBidType,
        self::SMART_BID_CONSERVATIVE_AdGetV2DataSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataSmartBidType', $value));
        }
        return (string) $value;
    }
}
