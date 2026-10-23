<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus
{
    public const DELIVERY_NOT_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus = 'DELIVERY_NOT';

    public const ALLOWED_VALUES = [
        self::DELIVERY_NOT_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus', $value));
        }
        return (string) $value;
    }
}
