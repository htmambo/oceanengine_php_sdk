<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceDistrict
{
    public const BUSINESS_DISTRICT_ProjectListV30DataListAudienceDistrict = 'BUSINESS_DISTRICT';
    public const CITY_ProjectListV30DataListAudienceDistrict = 'CITY';
    public const COUNTY_ProjectListV30DataListAudienceDistrict = 'COUNTY';
    public const NONE_ProjectListV30DataListAudienceDistrict = 'NONE';
    public const OVERSEA_ProjectListV30DataListAudienceDistrict = 'OVERSEA';
    public const REGION_ProjectListV30DataListAudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_ProjectListV30DataListAudienceDistrict,
        self::CITY_ProjectListV30DataListAudienceDistrict,
        self::COUNTY_ProjectListV30DataListAudienceDistrict,
        self::NONE_ProjectListV30DataListAudienceDistrict,
        self::OVERSEA_ProjectListV30DataListAudienceDistrict,
        self::REGION_ProjectListV30DataListAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
