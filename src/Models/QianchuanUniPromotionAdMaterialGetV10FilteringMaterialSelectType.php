<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType
{
    public const ALL_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType = 'ALL';
    public const CUSTOM_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType = 'CUSTOM';
    public const AUTO_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType,
        self::CUSTOM_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType,
        self::AUTO_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType', $value));
        }
        return (string) $value;
    }
}
