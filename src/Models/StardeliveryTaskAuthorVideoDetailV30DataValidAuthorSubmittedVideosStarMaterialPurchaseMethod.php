<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod
{
    public const FIXED_PRICE_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod = 'FIXED_PRICE';
    public const PERFORMANCE_BASED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod = 'PERFORMANCE_BASED';

    public const ALLOWED_VALUES = [
        self::FIXED_PRICE_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod,
        self::PERFORMANCE_BASED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod', $value));
        }
        return (string) $value;
    }
}
