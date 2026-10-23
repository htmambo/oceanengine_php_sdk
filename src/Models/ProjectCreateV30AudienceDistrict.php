<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceDistrict
{
    public const BUSINESS_DISTRICT_ProjectCreateV30AudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_ProjectCreateV30AudienceDistrict = 'NONE';
    public const OVERSEA_ProjectCreateV30AudienceDistrict = 'OVERSEA';
    public const REGION_ProjectCreateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_ProjectCreateV30AudienceDistrict,
        self::NONE_ProjectCreateV30AudienceDistrict,
        self::OVERSEA_ProjectCreateV30AudienceDistrict,
        self::REGION_ProjectCreateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
