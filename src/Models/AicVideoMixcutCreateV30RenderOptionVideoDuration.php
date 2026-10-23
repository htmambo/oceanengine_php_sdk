<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicVideoMixcutCreateV30RenderOptionVideoDuration
{
    public const DURATION_10_15_S_AicVideoMixcutCreateV30RenderOptionVideoDuration = 'DURATION_10_15S';
    public const DURATION_15_30_S_AicVideoMixcutCreateV30RenderOptionVideoDuration = 'DURATION_15_30S';
    public const DURATION_30_60_S_AicVideoMixcutCreateV30RenderOptionVideoDuration = 'DURATION_30_60S';
    public const DURATION_60_S_AicVideoMixcutCreateV30RenderOptionVideoDuration = 'DURATION_60S';

    public const ALLOWED_VALUES = [
        self::DURATION_10_15_S_AicVideoMixcutCreateV30RenderOptionVideoDuration,
        self::DURATION_15_30_S_AicVideoMixcutCreateV30RenderOptionVideoDuration,
        self::DURATION_30_60_S_AicVideoMixcutCreateV30RenderOptionVideoDuration,
        self::DURATION_60_S_AicVideoMixcutCreateV30RenderOptionVideoDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicVideoMixcutCreateV30RenderOptionVideoDuration', $value));
        }
        return (string) $value;
    }
}
