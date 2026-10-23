<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAwemeListV30DataAwemeUserInfoListAuthType
{
    public const ACCOUNT_BrandAwemeListV30DataAwemeUserInfoListAuthType = 'ACCOUNT';
    public const ITEM_BrandAwemeListV30DataAwemeUserInfoListAuthType = 'ITEM';
    public const ITEM_AND_LIVE_BrandAwemeListV30DataAwemeUserInfoListAuthType = 'ITEM_AND_LIVE';
    public const LIVE_BrandAwemeListV30DataAwemeUserInfoListAuthType = 'LIVE';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_BrandAwemeListV30DataAwemeUserInfoListAuthType,
        self::ITEM_BrandAwemeListV30DataAwemeUserInfoListAuthType,
        self::ITEM_AND_LIVE_BrandAwemeListV30DataAwemeUserInfoListAuthType,
        self::LIVE_BrandAwemeListV30DataAwemeUserInfoListAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAwemeListV30DataAwemeUserInfoListAuthType', $value));
        }
        return (string) $value;
    }
}
