<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource
{
    public const AD_FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource = 'AD';
    public const QIANCHUAN_FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource,
        self::QIANCHUAN_FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource', $value));
        }
        return (string) $value;
    }
}
