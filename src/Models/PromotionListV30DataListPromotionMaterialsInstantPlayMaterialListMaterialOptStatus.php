<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus
{
    public const DISABLE_PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus = 'DISABLE';
    public const ENABLE_PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus = 'ENABLE';
    public const MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus = 'MATERIAL_STATUS_QUEUING';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus,
        self::ENABLE_PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus,
        self::MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus', $value));
        }
        return (string) $value;
    }
}
