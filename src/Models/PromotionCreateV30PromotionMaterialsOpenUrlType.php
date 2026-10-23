<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsOpenUrlType
{
    public const CUSTOM_PromotionCreateV30PromotionMaterialsOpenUrlType = 'CUSTOM';
    public const DPA_PromotionCreateV30PromotionMaterialsOpenUrlType = 'DPA';
    public const NONE_PromotionCreateV30PromotionMaterialsOpenUrlType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionCreateV30PromotionMaterialsOpenUrlType,
        self::DPA_PromotionCreateV30PromotionMaterialsOpenUrlType,
        self::NONE_PromotionCreateV30PromotionMaterialsOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsOpenUrlType', $value));
        }
        return (string) $value;
    }
}
