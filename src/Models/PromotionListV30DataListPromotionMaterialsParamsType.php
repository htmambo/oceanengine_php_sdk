<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsParamsType
{
    public const CUSTOM_PromotionListV30DataListPromotionMaterialsParamsType = 'CUSTOM';
    public const DPA_PromotionListV30DataListPromotionMaterialsParamsType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionListV30DataListPromotionMaterialsParamsType,
        self::DPA_PromotionListV30DataListPromotionMaterialsParamsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsParamsType', $value));
        }
        return (string) $value;
    }
}
