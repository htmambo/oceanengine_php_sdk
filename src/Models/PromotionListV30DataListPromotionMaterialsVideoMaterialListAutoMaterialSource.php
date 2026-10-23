<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource
{
    public const MANUAL_ADD_PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource = 'MANUAL_ADD';
    public const SYSTEM_RECOMMEND_PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource = 'SYSTEM_RECOMMEND';

    public const ALLOWED_VALUES = [
        self::MANUAL_ADD_PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource,
        self::SYSTEM_RECOMMEND_PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource', $value));
        }
        return (string) $value;
    }
}
