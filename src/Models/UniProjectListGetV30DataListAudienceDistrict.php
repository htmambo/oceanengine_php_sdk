<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListAudienceDistrict
{
    public const BUSINESS_DISTRICT_UniProjectListGetV30DataListAudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_UniProjectListGetV30DataListAudienceDistrict = 'NONE';
    public const REGION_UniProjectListGetV30DataListAudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_UniProjectListGetV30DataListAudienceDistrict,
        self::NONE_UniProjectListGetV30DataListAudienceDistrict,
        self::REGION_UniProjectListGetV30DataListAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
