<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType
{
    public const EXCLUDE_BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType = 'EXCLUDE';
    public const INCLUDE_BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType = 'INCLUDE';
    public const UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType,
        self::INCLUDE_BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType,
        self::UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfoRetargetingType', $value));
        }
        return (string) $value;
    }
}
