<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType
{
    public const EXCLUDE_BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType = 'EXCLUDE';
    public const INCLUDE_BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType = 'INCLUDE';
    public const UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType,
        self::INCLUDE_BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType,
        self::UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30AudienceInfoRetargetingInfoRetargetingType', $value));
        }
        return (string) $value;
    }
}
