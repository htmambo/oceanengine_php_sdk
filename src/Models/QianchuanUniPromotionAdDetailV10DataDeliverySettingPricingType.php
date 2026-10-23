<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataDeliverySettingPricingType
{
    public const OCPM_QianchuanUniPromotionAdDetailV10DataDeliverySettingPricingType = 'OCPM';

    public const ALLOWED_VALUES = [
        self::OCPM_QianchuanUniPromotionAdDetailV10DataDeliverySettingPricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataDeliverySettingPricingType', $value));
        }
        return (string) $value;
    }
}
