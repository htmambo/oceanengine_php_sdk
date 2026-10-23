<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial
{
    public const LEVEL1_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial = 'LEVEL1';
    public const LEVEL2_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial = 'LEVEL2';
    public const LEVEL3_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial = 'LEVEL3';
    public const LEVEL4_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial = 'LEVEL4';
    public const LEVEL5_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial = 'LEVEL5';

    public const ALLOWED_VALUES = [
        self::LEVEL1_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial,
        self::LEVEL2_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial,
        self::LEVEL3_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial,
        self::LEVEL4_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial,
        self::LEVEL5_PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial', $value));
        }
        return (string) $value;
    }
}
