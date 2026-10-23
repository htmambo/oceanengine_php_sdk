<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementGetV30FilteringUseAs
{
    public const BACKGROUND_AicElementGetV30FilteringUseAs = 'BACKGROUND';
    public const FOREGROUND_AicElementGetV30FilteringUseAs = 'FOREGROUND';
    public const POST_VIDEO_AicElementGetV30FilteringUseAs = 'POST_VIDEO';
    public const PRE_VIDEO_AicElementGetV30FilteringUseAs = 'PRE_VIDEO';
    public const RAW_AicElementGetV30FilteringUseAs = 'RAW';

    public const ALLOWED_VALUES = [
        self::BACKGROUND_AicElementGetV30FilteringUseAs,
        self::FOREGROUND_AicElementGetV30FilteringUseAs,
        self::POST_VIDEO_AicElementGetV30FilteringUseAs,
        self::PRE_VIDEO_AicElementGetV30FilteringUseAs,
        self::RAW_AicElementGetV30FilteringUseAs,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementGetV30FilteringUseAs', $value));
        }
        return (string) $value;
    }
}
