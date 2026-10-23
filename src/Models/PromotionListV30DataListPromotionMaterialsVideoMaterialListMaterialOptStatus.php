<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus
{
    public const DISABLE_PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus = 'DISABLE';
    public const ENABLE_PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus = 'ENABLE';
    public const MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus = 'MATERIAL_STATUS_QUEUING';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus,
        self::ENABLE_PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus,
        self::MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus', $value));
        }
        return (string) $value;
    }
}
