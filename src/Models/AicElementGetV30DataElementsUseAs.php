<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementGetV30DataElementsUseAs
{
    public const BACKGROUND_AicElementGetV30DataElementsUseAs = 'BACKGROUND';
    public const FOREGROUND_AicElementGetV30DataElementsUseAs = 'FOREGROUND';
    public const POST_VIDEO_AicElementGetV30DataElementsUseAs = 'POST_VIDEO';
    public const PRE_VIDEO_AicElementGetV30DataElementsUseAs = 'PRE_VIDEO';
    public const RAW_AicElementGetV30DataElementsUseAs = 'RAW';

    public const ALLOWED_VALUES = [
        self::BACKGROUND_AicElementGetV30DataElementsUseAs,
        self::FOREGROUND_AicElementGetV30DataElementsUseAs,
        self::POST_VIDEO_AicElementGetV30DataElementsUseAs,
        self::PRE_VIDEO_AicElementGetV30DataElementsUseAs,
        self::RAW_AicElementGetV30DataElementsUseAs,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementGetV30DataElementsUseAs', $value));
        }
        return (string) $value;
    }
}
