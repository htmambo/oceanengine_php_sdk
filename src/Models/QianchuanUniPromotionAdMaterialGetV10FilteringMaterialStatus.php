<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus
{
    public const DELIVERY_OK_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus = 'DELIVERY_OK';
    public const DELETED_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus = 'DELETED';
    public const ALL_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus = 'ALL';
    public const EXCLUDE_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus = 'EXCLUDE';
    public const DELIVERY_NOT_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus = 'DELIVERY_NOT';

    public const ALLOWED_VALUES = [
        self::DELIVERY_OK_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus,
        self::DELETED_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus,
        self::ALL_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus,
        self::EXCLUDE_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus,
        self::DELIVERY_NOT_QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus', $value));
        }
        return (string) $value;
    }
}
