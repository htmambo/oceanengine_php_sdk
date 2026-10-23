<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus
{
    public const DISABLE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus = 'DISABLE';
    public const ENABLE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus = 'ENABLE';
    public const MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus = 'MATERIAL_STATUS_QUEUING';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus,
        self::ENABLE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus,
        self::MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus', $value));
        }
        return (string) $value;
    }
}
