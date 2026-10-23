<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial
{
    public const LEVEL1_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial = 'LEVEL1';
    public const LEVEL2_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial = 'LEVEL2';
    public const LEVEL3_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial = 'LEVEL3';
    public const LEVEL4_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial = 'LEVEL4';
    public const LEVEL5_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial = 'LEVEL5';

    public const ALLOWED_VALUES = [
        self::LEVEL1_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial,
        self::LEVEL2_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial,
        self::LEVEL3_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial,
        self::LEVEL4_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial,
        self::LEVEL5_PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial', $value));
        }
        return (string) $value;
    }
}
