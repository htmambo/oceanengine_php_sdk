<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsParamsType
{
    public const CUSTOM_PromotionCreateV30PromotionMaterialsParamsType = 'CUSTOM';
    public const DPA_PromotionCreateV30PromotionMaterialsParamsType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionCreateV30PromotionMaterialsParamsType,
        self::DPA_PromotionCreateV30PromotionMaterialsParamsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsParamsType', $value));
        }
        return (string) $value;
    }
}
