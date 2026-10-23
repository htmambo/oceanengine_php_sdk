<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallLiveUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode
{
    public const VIDEO_LARGE_QianchuanOverallLiveUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanOverallLiveUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::VIDEO_LARGE_QianchuanOverallLiveUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanOverallLiveUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallLiveUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
