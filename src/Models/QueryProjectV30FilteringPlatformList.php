<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV30FilteringPlatformList
{
    public const AD_QueryProjectV30FilteringPlatformList = 'AD';
    public const NATIVELIFE_QueryProjectV30FilteringPlatformList = 'NATIVELIFE';
    public const QIANCHUAN_QueryProjectV30FilteringPlatformList = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_QueryProjectV30FilteringPlatformList,
        self::NATIVELIFE_QueryProjectV30FilteringPlatformList,
        self::QIANCHUAN_QueryProjectV30FilteringPlatformList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV30FilteringPlatformList', $value));
        }
        return (string) $value;
    }
}
