<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType
{
    public const CAROUSEL_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'CAROUSEL';
    public const IMAGE_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'IMAGE';
    public const LIVE_ROOM_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'LIVE_ROOM';
    public const TITLE_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'TITLE';
    public const VIDEO_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::IMAGE_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::LIVE_ROOM_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::TITLE_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::VIDEO_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType', $value));
        }
        return (string) $value;
    }
}
