<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus
{
    public const DELIVERY_OK_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus = 'DELIVERY_OK';
    public const DELETED_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus = 'DELETED';
    public const DELIVERY_NOT_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus = 'DELIVERY_NOT';
    public const EXCLUDE_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus = 'EXCLUDE';

    public const ALLOWED_VALUES = [
        self::DELIVERY_OK_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus,
        self::DELETED_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus,
        self::DELIVERY_NOT_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus,
        self::EXCLUDE_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus', $value));
        }
        return (string) $value;
    }
}
