<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePreauditSubmitV30MaterialChannel
{
    public const AD_FilePreauditSubmitV30MaterialChannel = 'AD';
    public const DOU_PLUS_FilePreauditSubmitV30MaterialChannel = 'DOU_PLUS';
    public const QC_FilePreauditSubmitV30MaterialChannel = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_FilePreauditSubmitV30MaterialChannel,
        self::DOU_PLUS_FilePreauditSubmitV30MaterialChannel,
        self::QC_FilePreauditSubmitV30MaterialChannel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePreauditSubmitV30MaterialChannel', $value));
        }
        return (string) $value;
    }
}
