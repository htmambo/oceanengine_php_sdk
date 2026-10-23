<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialStatus
{
    public const DELIVERY_NOT_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialStatus = 'DELIVERY_NOT';

    public const ALLOWED_VALUES = [
        self::DELIVERY_NOT_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialStatus', $value));
        }
        return (string) $value;
    }
}
