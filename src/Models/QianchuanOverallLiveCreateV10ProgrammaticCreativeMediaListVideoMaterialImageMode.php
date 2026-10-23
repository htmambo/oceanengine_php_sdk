<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallLiveCreateV10ProgrammaticCreativeMediaListVideoMaterialImageMode
{
    public const VIDEO_LARGE_QianchuanOverallLiveCreateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanOverallLiveCreateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::VIDEO_LARGE_QianchuanOverallLiveCreateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanOverallLiveCreateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallLiveCreateV10ProgrammaticCreativeMediaListVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
