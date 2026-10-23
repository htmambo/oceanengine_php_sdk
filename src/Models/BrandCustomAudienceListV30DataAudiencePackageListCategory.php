<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCustomAudienceListV30DataAudiencePackageListCategory
{
    public const COMMON_BrandCustomAudienceListV30DataAudiencePackageListCategory = 'COMMON';
    public const E_COMMERCE_BrandCustomAudienceListV30DataAudiencePackageListCategory = 'E-COMMERCE';

    public const ALLOWED_VALUES = [
        self::COMMON_BrandCustomAudienceListV30DataAudiencePackageListCategory,
        self::E_COMMERCE_BrandCustomAudienceListV30DataAudiencePackageListCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCustomAudienceListV30DataAudiencePackageListCategory', $value));
        }
        return (string) $value;
    }
}
