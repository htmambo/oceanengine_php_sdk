<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePreauditGetV30DataListMaterialChannel
{
    public const AD_FilePreauditGetV30DataListMaterialChannel = 'AD';
    public const DOU_PLUS_FilePreauditGetV30DataListMaterialChannel = 'DOU_PLUS';
    public const QC_FilePreauditGetV30DataListMaterialChannel = 'QC';

    public const ALLOWED_VALUES = [
        self::AD_FilePreauditGetV30DataListMaterialChannel,
        self::DOU_PLUS_FilePreauditGetV30DataListMaterialChannel,
        self::QC_FilePreauditGetV30DataListMaterialChannel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePreauditGetV30DataListMaterialChannel', $value));
        }
        return (string) $value;
    }
}
