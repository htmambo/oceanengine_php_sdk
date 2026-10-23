<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceDistrict
{
    public const BUSINESS_DISTRICT_ProjectUpdateV30AudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_ProjectUpdateV30AudienceDistrict = 'NONE';
    public const OVERSEA_ProjectUpdateV30AudienceDistrict = 'OVERSEA';
    public const REGION_ProjectUpdateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_ProjectUpdateV30AudienceDistrict,
        self::NONE_ProjectUpdateV30AudienceDistrict,
        self::OVERSEA_ProjectUpdateV30AudienceDistrict,
        self::REGION_ProjectUpdateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
