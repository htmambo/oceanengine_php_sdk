<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceDistrict
{
    public const BUSINESS_DISTRICT_StdProjectCreateV30AudienceDistrict = 'BUSINESS_DISTRICT';
    public const NONE_StdProjectCreateV30AudienceDistrict = 'NONE';
    public const OVERSEA_StdProjectCreateV30AudienceDistrict = 'OVERSEA';
    public const REGION_StdProjectCreateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_StdProjectCreateV30AudienceDistrict,
        self::NONE_StdProjectCreateV30AudienceDistrict,
        self::OVERSEA_StdProjectCreateV30AudienceDistrict,
        self::REGION_StdProjectCreateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
