<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsOpenUrlType
{
    public const CUSTOM_PromotionListV30DataListPromotionMaterialsOpenUrlType = 'CUSTOM';
    public const DPA_PromotionListV30DataListPromotionMaterialsOpenUrlType = 'DPA';
    public const NONE_PromotionListV30DataListPromotionMaterialsOpenUrlType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionListV30DataListPromotionMaterialsOpenUrlType,
        self::DPA_PromotionListV30DataListPromotionMaterialsOpenUrlType,
        self::NONE_PromotionListV30DataListPromotionMaterialsOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsOpenUrlType', $value));
        }
        return (string) $value;
    }
}
