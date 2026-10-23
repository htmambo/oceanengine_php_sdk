<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30MaterialsType
{
    public const LIVE_MATERIALS_PromotionUpdateV30MaterialsType = 'LIVE_MATERIALS';
    public const LIVE_MIX_PROMOTION_MATERIALS_PromotionUpdateV30MaterialsType = 'LIVE_MIX_PROMOTION_MATERIALS';

    public const ALLOWED_VALUES = [
        self::LIVE_MATERIALS_PromotionUpdateV30MaterialsType,
        self::LIVE_MIX_PROMOTION_MATERIALS_PromotionUpdateV30MaterialsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30MaterialsType', $value));
        }
        return (string) $value;
    }
}
