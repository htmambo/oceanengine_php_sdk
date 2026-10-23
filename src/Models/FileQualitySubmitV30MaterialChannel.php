<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileQualitySubmitV30MaterialChannel
{
    public const AD_FileQualitySubmitV30MaterialChannel = 'AD';
    public const DOU_PLUS_FileQualitySubmitV30MaterialChannel = 'DOU_PLUS';
    public const QC_FileQualitySubmitV30MaterialChannel = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_FileQualitySubmitV30MaterialChannel,
        self::DOU_PLUS_FileQualitySubmitV30MaterialChannel,
        self::QC_FileQualitySubmitV30MaterialChannel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileQualitySubmitV30MaterialChannel', $value));
        }
        return (string) $value;
    }
}
