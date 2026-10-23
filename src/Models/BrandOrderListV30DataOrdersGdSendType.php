<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersGdSendType
{
    public const CPV_BrandOrderListV30DataOrdersGdSendType = 'CPV';
    public const CPV_EFFECTIVE_BrandOrderListV30DataOrdersGdSendType = 'CPV_EFFECTIVE';
    public const CTR_BrandOrderListV30DataOrdersGdSendType = 'CTR';
    public const CVR_BrandOrderListV30DataOrdersGdSendType = 'CVR';
    public const FANS_INCR_BrandOrderListV30DataOrdersGdSendType = 'FANS_INCR';
    public const FORM_BrandOrderListV30DataOrdersGdSendType = 'FORM';
    public const HOISTING_BrandOrderListV30DataOrdersGdSendType = 'HOISTING';
    public const INTERACTIVE_BrandOrderListV30DataOrdersGdSendType = 'INTERACTIVE';
    public const LIVE_INTERACTIVE_BrandOrderListV30DataOrdersGdSendType = 'LIVE_INTERACTIVE';
    public const LIVE_ROOM_BrandOrderListV30DataOrdersGdSendType = 'LIVE_ROOM';
    public const LIVE_WATICH_BrandOrderListV30DataOrdersGdSendType = 'LIVE_WATICH';
    public const PLANT_GRASS_BrandOrderListV30DataOrdersGdSendType = 'PLANT_GRASS';
    public const REACH_BrandOrderListV30DataOrdersGdSendType = 'REACH';
    public const SEQUENCE_BrandOrderListV30DataOrdersGdSendType = 'SEQUENCE';
    public const STRIDE_PLANT_GRASS_BrandOrderListV30DataOrdersGdSendType = 'STRIDE_PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::CPV_BrandOrderListV30DataOrdersGdSendType,
        self::CPV_EFFECTIVE_BrandOrderListV30DataOrdersGdSendType,
        self::CTR_BrandOrderListV30DataOrdersGdSendType,
        self::CVR_BrandOrderListV30DataOrdersGdSendType,
        self::FANS_INCR_BrandOrderListV30DataOrdersGdSendType,
        self::FORM_BrandOrderListV30DataOrdersGdSendType,
        self::HOISTING_BrandOrderListV30DataOrdersGdSendType,
        self::INTERACTIVE_BrandOrderListV30DataOrdersGdSendType,
        self::LIVE_INTERACTIVE_BrandOrderListV30DataOrdersGdSendType,
        self::LIVE_ROOM_BrandOrderListV30DataOrdersGdSendType,
        self::LIVE_WATICH_BrandOrderListV30DataOrdersGdSendType,
        self::PLANT_GRASS_BrandOrderListV30DataOrdersGdSendType,
        self::REACH_BrandOrderListV30DataOrdersGdSendType,
        self::SEQUENCE_BrandOrderListV30DataOrdersGdSendType,
        self::STRIDE_PLANT_GRASS_BrandOrderListV30DataOrdersGdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersGdSendType', $value));
        }
        return (string) $value;
    }
}
