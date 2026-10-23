<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDeepBidTypeGetV30ProductSetting
{
    public const MULTI_PRODUCTS_EventManagerDeepBidTypeGetV30ProductSetting = 'MULTI_PRODUCTS';
    public const NO_MAP_EventManagerDeepBidTypeGetV30ProductSetting = 'NO_MAP';
    public const SINGLE_EventManagerDeepBidTypeGetV30ProductSetting = 'SINGLE';

    public const ALLOWED_VALUES = [
        self::MULTI_PRODUCTS_EventManagerDeepBidTypeGetV30ProductSetting,
        self::NO_MAP_EventManagerDeepBidTypeGetV30ProductSetting,
        self::SINGLE_EventManagerDeepBidTypeGetV30ProductSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDeepBidTypeGetV30ProductSetting', $value));
        }
        return (string) $value;
    }
}
