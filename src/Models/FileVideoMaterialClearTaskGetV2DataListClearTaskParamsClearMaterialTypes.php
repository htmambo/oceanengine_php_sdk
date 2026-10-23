<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes
{
    public const INEFFICIENT_MATERIAL_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes = 'INEFFICIENT_MATERIAL';
    public const SIMILAR_MATERIAL_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes = 'SIMILAR_MATERIAL';
    public const SIMILAR_QUEUE_MATERIAL_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes = 'SIMILAR_QUEUE_MATERIAL';

    public const ALLOWED_VALUES = [
        self::INEFFICIENT_MATERIAL_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes,
        self::SIMILAR_MATERIAL_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes,
        self::SIMILAR_QUEUE_MATERIAL_FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes', $value));
        }
        return (string) $value;
    }
}
