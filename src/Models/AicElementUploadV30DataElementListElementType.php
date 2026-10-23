<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementUploadV30DataElementListElementType
{
    public const FOLDER_AicElementUploadV30DataElementListElementType = 'FOLDER';
    public const FONT_AicElementUploadV30DataElementListElementType = 'FONT';
    public const IMAGE_AicElementUploadV30DataElementListElementType = 'IMAGE';
    public const MUSIC_AicElementUploadV30DataElementListElementType = 'MUSIC';
    public const VIDEO_AicElementUploadV30DataElementListElementType = 'VIDEO';
    public const VOICE_AicElementUploadV30DataElementListElementType = 'VOICE';

    public const ALLOWED_VALUES = [
        self::FOLDER_AicElementUploadV30DataElementListElementType,
        self::FONT_AicElementUploadV30DataElementListElementType,
        self::IMAGE_AicElementUploadV30DataElementListElementType,
        self::MUSIC_AicElementUploadV30DataElementListElementType,
        self::VIDEO_AicElementUploadV30DataElementListElementType,
        self::VOICE_AicElementUploadV30DataElementListElementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementUploadV30DataElementListElementType', $value));
        }
        return (string) $value;
    }
}
