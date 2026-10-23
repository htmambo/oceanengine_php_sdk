<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource
{
    public const AD_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource = 'AD';
    public const QIANCHUAN_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource,
        self::QIANCHUAN_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource', $value));
        }
        return (string) $value;
    }
}
