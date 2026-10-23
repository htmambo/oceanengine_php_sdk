<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType
{
    public const EXCLUDE_BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType = 'EXCLUDE';
    public const INCLUDE_BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType = 'INCLUDE';
    public const UNLIMITED_BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType,
        self::INCLUDE_BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType,
        self::UNLIMITED_BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30AudienceInfoRetargetingInfoRetargetingType', $value));
        }
        return (string) $value;
    }
}
