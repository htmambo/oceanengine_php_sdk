<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAwemeListV30DataAwemeUserInfoListAppName
{
    public const AWEME_BrandAwemeListV30DataAwemeUserInfoListAppName = 'AWEME';
    public const WATERMELON_BrandAwemeListV30DataAwemeUserInfoListAppName = 'WATERMELON';

    public const ALLOWED_VALUES = [
        self::AWEME_BrandAwemeListV30DataAwemeUserInfoListAppName,
        self::WATERMELON_BrandAwemeListV30DataAwemeUserInfoListAppName,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAwemeListV30DataAwemeUserInfoListAppName', $value));
        }
        return (string) $value;
    }
}
