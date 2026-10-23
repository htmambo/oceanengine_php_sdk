<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsAdvancedDcSettings
{
    public const OPTIMIZE_LANDING_PAGE_PromotionCreateV30PromotionMaterialsAdvancedDcSettings = 'OPTIMIZE_LANDING_PAGE';
    public const OPTIMIZE_SEARCH_RESULTS_PAGE_PromotionCreateV30PromotionMaterialsAdvancedDcSettings = 'OPTIMIZE_SEARCH_RESULTS_PAGE';

    public const ALLOWED_VALUES = [
        self::OPTIMIZE_LANDING_PAGE_PromotionCreateV30PromotionMaterialsAdvancedDcSettings,
        self::OPTIMIZE_SEARCH_RESULTS_PAGE_PromotionCreateV30PromotionMaterialsAdvancedDcSettings,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsAdvancedDcSettings', $value));
        }
        return (string) $value;
    }
}
