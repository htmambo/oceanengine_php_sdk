<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus
{
    public const DISABLE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus = 'DISABLE';
    public const ENABLE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus = 'ENABLE';
    public const MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus = 'MATERIAL_STATUS_QUEUING';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus,
        self::ENABLE_PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus,
        self::MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionRelatedProductImageMaterialListImagesMaterialOptStatus', $value));
        }
        return (string) $value;
    }
}
