<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsImageMaterialListImagesMaterialOptStatus
{
    public const DISABLE_PromotionListV30DataListPromotionMaterialsImageMaterialListImagesMaterialOptStatus = 'DISABLE';
    public const ENABLE_PromotionListV30DataListPromotionMaterialsImageMaterialListImagesMaterialOptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionListV30DataListPromotionMaterialsImageMaterialListImagesMaterialOptStatus,
        self::ENABLE_PromotionListV30DataListPromotionMaterialsImageMaterialListImagesMaterialOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsImageMaterialListImagesMaterialOptStatus', $value));
        }
        return (string) $value;
    }
}
