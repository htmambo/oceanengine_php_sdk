<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30AudienceDistrict
{
    public const BUSINESS_DISTRICT_UniProjectUpdateV30AudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_UniProjectUpdateV30AudienceDistrict = 'NONE';
    public const REGION_UniProjectUpdateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_UniProjectUpdateV30AudienceDistrict,
        self::NONE_UniProjectUpdateV30AudienceDistrict,
        self::REGION_UniProjectUpdateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
