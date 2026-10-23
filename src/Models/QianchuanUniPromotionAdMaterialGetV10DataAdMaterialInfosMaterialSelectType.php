<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType
{
    public const ALL_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType = 'ALL';
    public const CUSTOM_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType = 'CUSTOM';
    public const AUTO_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType,
        self::CUSTOM_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType,
        self::AUTO_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType', $value));
        }
        return (string) $value;
    }
}
