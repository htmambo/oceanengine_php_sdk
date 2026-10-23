<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType
{
    public const EXCLUDE_BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType = 'EXCLUDE';
    public const INCLUDE_BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType = 'INCLUDE';
    public const UNLIMITED_BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType,
        self::INCLUDE_BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType,
        self::UNLIMITED_BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType', $value));
        }
        return (string) $value;
    }
}
