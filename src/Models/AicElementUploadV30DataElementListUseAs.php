<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementUploadV30DataElementListUseAs
{
    public const BACKGROUND_AicElementUploadV30DataElementListUseAs = 'BACKGROUND';
    public const FOREGROUND_AicElementUploadV30DataElementListUseAs = 'FOREGROUND';
    public const POST_VIDEO_AicElementUploadV30DataElementListUseAs = 'POST_VIDEO';
    public const PRE_VIDEO_AicElementUploadV30DataElementListUseAs = 'PRE_VIDEO';
    public const RAW_AicElementUploadV30DataElementListUseAs = 'RAW';

    public const ALLOWED_VALUES = [
        self::BACKGROUND_AicElementUploadV30DataElementListUseAs,
        self::FOREGROUND_AicElementUploadV30DataElementListUseAs,
        self::POST_VIDEO_AicElementUploadV30DataElementListUseAs,
        self::PRE_VIDEO_AicElementUploadV30DataElementListUseAs,
        self::RAW_AicElementUploadV30DataElementListUseAs,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementUploadV30DataElementListUseAs', $value));
        }
        return (string) $value;
    }
}
