<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementUploadV30UseAs
{
    public const BACKGROUND_AicElementUploadV30UseAs = 'BACKGROUND';
    public const FOREGROUND_AicElementUploadV30UseAs = 'FOREGROUND';
    public const POST_VIDEO_AicElementUploadV30UseAs = 'POST_VIDEO';
    public const PRE_VIDEO_AicElementUploadV30UseAs = 'PRE_VIDEO';
    public const RAW_AicElementUploadV30UseAs = 'RAW';

    public const ALLOWED_VALUES = [
        self::BACKGROUND_AicElementUploadV30UseAs,
        self::FOREGROUND_AicElementUploadV30UseAs,
        self::POST_VIDEO_AicElementUploadV30UseAs,
        self::PRE_VIDEO_AicElementUploadV30UseAs,
        self::RAW_AicElementUploadV30UseAs,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementUploadV30UseAs', $value));
        }
        return (string) $value;
    }
}
