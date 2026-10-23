<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceDistrict
{
    public const BUSINESS_DISTRICT_StdProjectListV30DataListAudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_StdProjectListV30DataListAudienceDistrict = 'NONE';
    public const OVERSEA_StdProjectListV30DataListAudienceDistrict = 'OVERSEA';
    public const REGION_StdProjectListV30DataListAudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_StdProjectListV30DataListAudienceDistrict,
        self::NONE_StdProjectListV30DataListAudienceDistrict,
        self::OVERSEA_StdProjectListV30DataListAudienceDistrict,
        self::REGION_StdProjectListV30DataListAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
