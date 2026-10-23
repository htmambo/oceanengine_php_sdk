<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30DataOrderListAdListAudienceDistrict
{
    public const BUSINESS_DouplusOrderListV30DataOrderListAdListAudienceDistrict = 'BUSINESS';
    public const COUNTRY_DouplusOrderListV30DataOrderListAdListAudienceDistrict = 'COUNTRY';
    public const PROVINCE_DouplusOrderListV30DataOrderListAdListAudienceDistrict = 'PROVINCE';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DouplusOrderListV30DataOrderListAdListAudienceDistrict,
        self::COUNTRY_DouplusOrderListV30DataOrderListAdListAudienceDistrict,
        self::PROVINCE_DouplusOrderListV30DataOrderListAdListAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30DataOrderListAdListAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
