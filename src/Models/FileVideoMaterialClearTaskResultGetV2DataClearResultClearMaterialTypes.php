<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes
{
    public const INEFFICIENT_MATERIAL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes = 'INEFFICIENT_MATERIAL';
    public const SIMILAR_MATERIAL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes = 'SIMILAR_MATERIAL';
    public const SIMILAR_QUEUE_MATERIAL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes = 'SIMILAR_QUEUE_MATERIAL';

    public const ALLOWED_VALUES = [
        self::INEFFICIENT_MATERIAL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes,
        self::SIMILAR_MATERIAL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes,
        self::SIMILAR_QUEUE_MATERIAL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes', $value));
        }
        return (string) $value;
    }
}
