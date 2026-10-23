<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePreauditGetV30FilteringMaterialChannel
{
    public const AD_FilePreauditGetV30FilteringMaterialChannel = 'AD';
    public const DOU_PLUS_FilePreauditGetV30FilteringMaterialChannel = 'DOU_PLUS';
    public const QC_FilePreauditGetV30FilteringMaterialChannel = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_FilePreauditGetV30FilteringMaterialChannel,
        self::DOU_PLUS_FilePreauditGetV30FilteringMaterialChannel,
        self::QC_FilePreauditGetV30FilteringMaterialChannel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePreauditGetV30FilteringMaterialChannel', $value));
        }
        return (string) $value;
    }
}
