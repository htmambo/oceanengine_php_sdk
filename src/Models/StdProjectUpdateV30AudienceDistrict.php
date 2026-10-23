<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceDistrict
{
    public const BUSINESS_DISTRICT_StdProjectUpdateV30AudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_StdProjectUpdateV30AudienceDistrict = 'NONE';
    public const OVERSEA_StdProjectUpdateV30AudienceDistrict = 'OVERSEA';
    public const REGION_StdProjectUpdateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_StdProjectUpdateV30AudienceDistrict,
        self::NONE_StdProjectUpdateV30AudienceDistrict,
        self::OVERSEA_StdProjectUpdateV30AudienceDistrict,
        self::REGION_StdProjectUpdateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
