<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementGetV30DataElementsElementType
{
    public const FOLDER_AicElementGetV30DataElementsElementType = 'FOLDER';
    public const FONT_AicElementGetV30DataElementsElementType = 'FONT';
    public const IMAGE_AicElementGetV30DataElementsElementType = 'IMAGE';
    public const MUSIC_AicElementGetV30DataElementsElementType = 'MUSIC';
    public const VIDEO_AicElementGetV30DataElementsElementType = 'VIDEO';
    public const VOICE_AicElementGetV30DataElementsElementType = 'VOICE';

    public const ALLOWED_VALUES = [
        self::FOLDER_AicElementGetV30DataElementsElementType,
        self::FONT_AicElementGetV30DataElementsElementType,
        self::IMAGE_AicElementGetV30DataElementsElementType,
        self::MUSIC_AicElementGetV30DataElementsElementType,
        self::VIDEO_AicElementGetV30DataElementsElementType,
        self::VOICE_AicElementGetV30DataElementsElementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementGetV30DataElementsElementType', $value));
        }
        return (string) $value;
    }
}
