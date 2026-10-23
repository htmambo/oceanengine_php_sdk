<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType
{
    public const ECOMMERCE_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType = 'ECOMMERCE';
    public const EXCLUDE_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType = 'EXCLUDE';
    public const INCLUDE_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType = 'INCLUDE';
    public const UNLIMITED_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ECOMMERCE_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType,
        self::EXCLUDE_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType,
        self::INCLUDE_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType,
        self::UNLIMITED_BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30AudienceInfoRetargetingInfoRetargetingType', $value));
        }
        return (string) $value;
    }
}
