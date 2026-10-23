<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial
{
    public const LEVEL1_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial = 'LEVEL1';
    public const LEVEL2_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial = 'LEVEL2';
    public const LEVEL3_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial = 'LEVEL3';
    public const LEVEL4_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial = 'LEVEL4';
    public const LEVEL5_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial = 'LEVEL5';

    public const ALLOWED_VALUES = [
        self::LEVEL1_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial,
        self::LEVEL2_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial,
        self::LEVEL3_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial,
        self::LEVEL4_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial,
        self::LEVEL5_PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial', $value));
        }
        return (string) $value;
    }
}
