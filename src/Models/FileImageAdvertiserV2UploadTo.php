<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileImageAdvertiserV2UploadTo
{
    public const AD_FileImageAdvertiserV2UploadTo = 'AD';
    public const AVATAR_FileImageAdvertiserV2UploadTo = 'AVATAR';
    public const CG_FileImageAdvertiserV2UploadTo = 'CG';

    public const ALLOWED_VALUES = [
        self::AD_FileImageAdvertiserV2UploadTo,
        self::AVATAR_FileImageAdvertiserV2UploadTo,
        self::CG_FileImageAdvertiserV2UploadTo,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileImageAdvertiserV2UploadTo', $value));
        }
        return (string) $value;
    }
}
