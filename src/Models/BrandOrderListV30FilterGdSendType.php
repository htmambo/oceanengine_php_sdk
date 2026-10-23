<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterGdSendType
{
    public const CPV_BrandOrderListV30FilterGdSendType = 'CPV';
    public const CPV_EFFECTIVE_BrandOrderListV30FilterGdSendType = 'CPV_EFFECTIVE';
    public const CTR_BrandOrderListV30FilterGdSendType = 'CTR';
    public const CVR_BrandOrderListV30FilterGdSendType = 'CVR';
    public const FANS_INCR_BrandOrderListV30FilterGdSendType = 'FANS_INCR';
    public const FORM_BrandOrderListV30FilterGdSendType = 'FORM';
    public const HOISTING_BrandOrderListV30FilterGdSendType = 'HOISTING';
    public const INTERACTIVE_BrandOrderListV30FilterGdSendType = 'INTERACTIVE';
    public const LIVE_INTERACTIVE_BrandOrderListV30FilterGdSendType = 'LIVE_INTERACTIVE';
    public const LIVE_ROOM_BrandOrderListV30FilterGdSendType = 'LIVE_ROOM';
    public const LIVE_WATICH_BrandOrderListV30FilterGdSendType = 'LIVE_WATICH';
    public const PLANT_GRASS_BrandOrderListV30FilterGdSendType = 'PLANT_GRASS';
    public const REACH_BrandOrderListV30FilterGdSendType = 'REACH';
    public const SEQUENCE_BrandOrderListV30FilterGdSendType = 'SEQUENCE';
    public const STRIDE_PLANT_GRASS_BrandOrderListV30FilterGdSendType = 'STRIDE_PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::CPV_BrandOrderListV30FilterGdSendType,
        self::CPV_EFFECTIVE_BrandOrderListV30FilterGdSendType,
        self::CTR_BrandOrderListV30FilterGdSendType,
        self::CVR_BrandOrderListV30FilterGdSendType,
        self::FANS_INCR_BrandOrderListV30FilterGdSendType,
        self::FORM_BrandOrderListV30FilterGdSendType,
        self::HOISTING_BrandOrderListV30FilterGdSendType,
        self::INTERACTIVE_BrandOrderListV30FilterGdSendType,
        self::LIVE_INTERACTIVE_BrandOrderListV30FilterGdSendType,
        self::LIVE_ROOM_BrandOrderListV30FilterGdSendType,
        self::LIVE_WATICH_BrandOrderListV30FilterGdSendType,
        self::PLANT_GRASS_BrandOrderListV30FilterGdSendType,
        self::REACH_BrandOrderListV30FilterGdSendType,
        self::SEQUENCE_BrandOrderListV30FilterGdSendType,
        self::STRIDE_PLANT_GRASS_BrandOrderListV30FilterGdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterGdSendType', $value));
        }
        return (string) $value;
    }
}
