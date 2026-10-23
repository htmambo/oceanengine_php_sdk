<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict
{
    public const BUSINESS_DISTRICT_OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict = 'BUSINESS_DISTRICT';
    public const OVERSEA_OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict = 'OVERSEA';
    public const REGION_OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict,
        self::OVERSEA_OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict,
        self::REGION_OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
