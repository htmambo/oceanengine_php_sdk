<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict
{
    public const BUSINESS_DISTRICT_OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict = 'NONE';
    public const REGION_OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict,
        self::NONE_OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict,
        self::REGION_OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
