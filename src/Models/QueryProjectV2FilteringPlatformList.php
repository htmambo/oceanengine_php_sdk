<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV2FilteringPlatformList
{
    public const AD_QueryProjectV2FilteringPlatformList = 'AD';
    public const NATIVELIFE_QueryProjectV2FilteringPlatformList = 'NATIVELIFE';
    public const QIANCHUAN_QueryProjectV2FilteringPlatformList = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_QueryProjectV2FilteringPlatformList,
        self::NATIVELIFE_QueryProjectV2FilteringPlatformList,
        self::QIANCHUAN_QueryProjectV2FilteringPlatformList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV2FilteringPlatformList', $value));
        }
        return (string) $value;
    }
}
