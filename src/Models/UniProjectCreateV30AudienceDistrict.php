<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30AudienceDistrict
{
    public const BUSINESS_DISTRICT_UniProjectCreateV30AudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_UniProjectCreateV30AudienceDistrict = 'NONE';
    public const REGION_UniProjectCreateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_UniProjectCreateV30AudienceDistrict,
        self::NONE_UniProjectCreateV30AudienceDistrict,
        self::REGION_UniProjectCreateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
