<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementUploadV30ElementType
{
    public const FOLDER_AicElementUploadV30ElementType = 'FOLDER';
    public const FONT_AicElementUploadV30ElementType = 'FONT';
    public const IMAGE_AicElementUploadV30ElementType = 'IMAGE';
    public const MUSIC_AicElementUploadV30ElementType = 'MUSIC';
    public const VIDEO_AicElementUploadV30ElementType = 'VIDEO';
    public const VOICE_AicElementUploadV30ElementType = 'VOICE';

    public const ALLOWED_VALUES = [
        self::FOLDER_AicElementUploadV30ElementType,
        self::FONT_AicElementUploadV30ElementType,
        self::IMAGE_AicElementUploadV30ElementType,
        self::MUSIC_AicElementUploadV30ElementType,
        self::VIDEO_AicElementUploadV30ElementType,
        self::VOICE_AicElementUploadV30ElementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementUploadV30ElementType', $value));
        }
        return (string) $value;
    }
}
