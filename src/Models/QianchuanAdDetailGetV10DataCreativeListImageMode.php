<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataCreativeListImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanAdDetailGetV10DataCreativeListImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanAdDetailGetV10DataCreativeListImageMode = 'CAROUSEL';
    public const LARGE_QianchuanAdDetailGetV10DataCreativeListImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanAdDetailGetV10DataCreativeListImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanAdDetailGetV10DataCreativeListImageMode = 'SMALL';
    public const SQUARE_QianchuanAdDetailGetV10DataCreativeListImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanAdDetailGetV10DataCreativeListImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanAdDetailGetV10DataCreativeListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanAdDetailGetV10DataCreativeListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::CAROUSEL_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::LARGE_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::LARGE_VERTICAL_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::SMALL_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::SQUARE_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::UNION_SPLASH_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::VIDEO_LARGE_QianchuanAdDetailGetV10DataCreativeListImageMode,
        self::VIDEO_VERTICAL_QianchuanAdDetailGetV10DataCreativeListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataCreativeListImageMode', $value));
        }
        return (string) $value;
    }
}
