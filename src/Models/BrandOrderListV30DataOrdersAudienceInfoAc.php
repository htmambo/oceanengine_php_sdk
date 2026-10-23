<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoAc
{
    public const UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoAc = 'UNLIMITED';
    public const WIFI_BrandOrderListV30DataOrdersAudienceInfoAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoAc,
        self::WIFI_BrandOrderListV30DataOrdersAudienceInfoAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoAc', $value));
        }
        return (string) $value;
    }
}
