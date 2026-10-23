<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30OrderFilterGdSendType
{
    public const CPV_BrandMaterialListV30OrderFilterGdSendType = 'CPV';
    public const CPV_EFFECTIVE_BrandMaterialListV30OrderFilterGdSendType = 'CPV_EFFECTIVE';
    public const CTR_BrandMaterialListV30OrderFilterGdSendType = 'CTR';
    public const CVR_BrandMaterialListV30OrderFilterGdSendType = 'CVR';
    public const FANS_INCR_BrandMaterialListV30OrderFilterGdSendType = 'FANS_INCR';
    public const FORM_BrandMaterialListV30OrderFilterGdSendType = 'FORM';
    public const HOISTING_BrandMaterialListV30OrderFilterGdSendType = 'HOISTING';
    public const INTERACTIVE_BrandMaterialListV30OrderFilterGdSendType = 'INTERACTIVE';
    public const LIVE_INTERACTIVE_BrandMaterialListV30OrderFilterGdSendType = 'LIVE_INTERACTIVE';
    public const LIVE_ROOM_BrandMaterialListV30OrderFilterGdSendType = 'LIVE_ROOM';
    public const LIVE_WATICH_BrandMaterialListV30OrderFilterGdSendType = 'LIVE_WATICH';
    public const PLANT_GRASS_BrandMaterialListV30OrderFilterGdSendType = 'PLANT_GRASS';
    public const REACH_BrandMaterialListV30OrderFilterGdSendType = 'REACH';
    public const SEQUENCE_BrandMaterialListV30OrderFilterGdSendType = 'SEQUENCE';
    public const STRIDE_PLANT_GRASS_BrandMaterialListV30OrderFilterGdSendType = 'STRIDE_PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::CPV_BrandMaterialListV30OrderFilterGdSendType,
        self::CPV_EFFECTIVE_BrandMaterialListV30OrderFilterGdSendType,
        self::CTR_BrandMaterialListV30OrderFilterGdSendType,
        self::CVR_BrandMaterialListV30OrderFilterGdSendType,
        self::FANS_INCR_BrandMaterialListV30OrderFilterGdSendType,
        self::FORM_BrandMaterialListV30OrderFilterGdSendType,
        self::HOISTING_BrandMaterialListV30OrderFilterGdSendType,
        self::INTERACTIVE_BrandMaterialListV30OrderFilterGdSendType,
        self::LIVE_INTERACTIVE_BrandMaterialListV30OrderFilterGdSendType,
        self::LIVE_ROOM_BrandMaterialListV30OrderFilterGdSendType,
        self::LIVE_WATICH_BrandMaterialListV30OrderFilterGdSendType,
        self::PLANT_GRASS_BrandMaterialListV30OrderFilterGdSendType,
        self::REACH_BrandMaterialListV30OrderFilterGdSendType,
        self::SEQUENCE_BrandMaterialListV30OrderFilterGdSendType,
        self::STRIDE_PLANT_GRASS_BrandMaterialListV30OrderFilterGdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30OrderFilterGdSendType', $value));
        }
        return (string) $value;
    }
}
