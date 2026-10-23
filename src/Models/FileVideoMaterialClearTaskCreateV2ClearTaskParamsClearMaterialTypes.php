<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes
{
    public const INEFFICIENT_MATERIAL_FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes = 'INEFFICIENT_MATERIAL';
    public const SIMILAR_MATERIAL_FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes = 'SIMILAR_MATERIAL';
    public const SIMILAR_QUEUE_MATERIAL_FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes = 'SIMILAR_QUEUE_MATERIAL';

    public const ALLOWED_VALUES = [
        self::INEFFICIENT_MATERIAL_FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes,
        self::SIMILAR_MATERIAL_FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes,
        self::SIMILAR_QUEUE_MATERIAL_FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes', $value));
        }
        return (string) $value;
    }
}
