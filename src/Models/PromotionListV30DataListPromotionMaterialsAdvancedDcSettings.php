<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsAdvancedDcSettings
{
    public const OPTIMIZE_LANDING_PAGE_PromotionListV30DataListPromotionMaterialsAdvancedDcSettings = 'OPTIMIZE_LANDING_PAGE';
    public const OPTIMIZE_SEARCH_RESULTS_PAGE_PromotionListV30DataListPromotionMaterialsAdvancedDcSettings = 'OPTIMIZE_SEARCH_RESULTS_PAGE';

    public const ALLOWED_VALUES = [
        self::OPTIMIZE_LANDING_PAGE_PromotionListV30DataListPromotionMaterialsAdvancedDcSettings,
        self::OPTIMIZE_SEARCH_RESULTS_PAGE_PromotionListV30DataListPromotionMaterialsAdvancedDcSettings,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsAdvancedDcSettings', $value));
        }
        return (string) $value;
    }
}
