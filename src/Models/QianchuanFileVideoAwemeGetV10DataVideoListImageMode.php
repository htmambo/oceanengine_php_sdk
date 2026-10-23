<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanFileVideoAwemeGetV10DataVideoListImageMode
{
    public const VIDEO_LARGE_QianchuanFileVideoAwemeGetV10DataVideoListImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanFileVideoAwemeGetV10DataVideoListImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::VIDEO_LARGE_QianchuanFileVideoAwemeGetV10DataVideoListImageMode,
        self::VIDEO_VERTICAL_QianchuanFileVideoAwemeGetV10DataVideoListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanFileVideoAwemeGetV10DataVideoListImageMode', $value));
        }
        return (string) $value;
    }
}
