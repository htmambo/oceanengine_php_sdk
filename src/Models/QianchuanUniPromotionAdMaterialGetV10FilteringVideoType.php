<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10FilteringVideoType
{
    public const ALL_QianchuanUniPromotionAdMaterialGetV10FilteringVideoType = 'ALL';
    public const CUSTOM_QianchuanUniPromotionAdMaterialGetV10FilteringVideoType = 'CUSTOM';
    public const AUTO_QianchuanUniPromotionAdMaterialGetV10FilteringVideoType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionAdMaterialGetV10FilteringVideoType,
        self::CUSTOM_QianchuanUniPromotionAdMaterialGetV10FilteringVideoType,
        self::AUTO_QianchuanUniPromotionAdMaterialGetV10FilteringVideoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10FilteringVideoType', $value));
        }
        return (string) $value;
    }
}
