<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAwemeListV30DataAwemeUserInfoListOperatePlatform
{
    public const BIDDING_BrandAwemeListV30DataAwemeUserInfoListOperatePlatform = 'BIDDING';
    public const BRAND_BrandAwemeListV30DataAwemeUserInfoListOperatePlatform = 'BRAND';

    public const ALLOWED_VALUES = [
        self::BIDDING_BrandAwemeListV30DataAwemeUserInfoListOperatePlatform,
        self::BRAND_BrandAwemeListV30DataAwemeUserInfoListOperatePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAwemeListV30DataAwemeUserInfoListOperatePlatform', $value));
        }
        return (string) $value;
    }
}
