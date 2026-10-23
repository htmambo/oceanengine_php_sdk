<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListMaterialsType
{
    public const LIVE_MATERIALS_PromotionListV30DataListMaterialsType = 'LIVE_MATERIALS';
    public const LIVE_MIX_PROMOTION_MATERIALS_PromotionListV30DataListMaterialsType = 'LIVE_MIX_PROMOTION_MATERIALS';
    public const PROMOTION_MATERIALS_PromotionListV30DataListMaterialsType = 'PROMOTION_MATERIALS';

    public const ALLOWED_VALUES = [
        self::LIVE_MATERIALS_PromotionListV30DataListMaterialsType,
        self::LIVE_MIX_PROMOTION_MATERIALS_PromotionListV30DataListMaterialsType,
        self::PROMOTION_MATERIALS_PromotionListV30DataListMaterialsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListMaterialsType', $value));
        }
        return (string) $value;
    }
}
