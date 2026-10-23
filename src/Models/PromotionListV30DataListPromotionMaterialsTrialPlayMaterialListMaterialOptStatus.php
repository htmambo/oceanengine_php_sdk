<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus
{
    public const DISABLE_PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus = 'DISABLE';
    public const ENABLE_PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus = 'ENABLE';
    public const MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus = 'MATERIAL_STATUS_QUEUING';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus,
        self::ENABLE_PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus,
        self::MATERIAL_STATUS_QUEUING_PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsTrialPlayMaterialListMaterialOptStatus', $value));
        }
        return (string) $value;
    }
}
