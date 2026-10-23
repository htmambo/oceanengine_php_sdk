<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementGetV30FilteringElementType
{
    public const FOLDER_AicElementGetV30FilteringElementType = 'FOLDER';
    public const FONT_AicElementGetV30FilteringElementType = 'FONT';
    public const IMAGE_AicElementGetV30FilteringElementType = 'IMAGE';
    public const MUSIC_AicElementGetV30FilteringElementType = 'MUSIC';
    public const VIDEO_AicElementGetV30FilteringElementType = 'VIDEO';
    public const VOICE_AicElementGetV30FilteringElementType = 'VOICE';

    public const ALLOWED_VALUES = [
        self::FOLDER_AicElementGetV30FilteringElementType,
        self::FONT_AicElementGetV30FilteringElementType,
        self::IMAGE_AicElementGetV30FilteringElementType,
        self::MUSIC_AicElementGetV30FilteringElementType,
        self::VIDEO_AicElementGetV30FilteringElementType,
        self::VOICE_AicElementGetV30FilteringElementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementGetV30FilteringElementType', $value));
        }
        return (string) $value;
    }
}
