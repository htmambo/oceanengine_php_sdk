<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType
{
    public const CAROUSEL_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType = 'CAROUSEL';
    public const IMAGE_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType = 'IMAGE';
    public const LIVE_ROOM_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType = 'LIVE_ROOM';
    public const TITLE_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType = 'TITLE';
    public const VIDEO_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType,
        self::IMAGE_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType,
        self::LIVE_ROOM_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType,
        self::TITLE_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType,
        self::VIDEO_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
