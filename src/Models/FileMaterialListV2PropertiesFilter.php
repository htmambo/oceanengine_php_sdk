<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileMaterialListV2PropertiesFilter
{
    public const AD_HIGH_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter = 'AD_HIGH_QUALITY_MATERIAL';
    public const AD_LOW_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter = 'AD_LOW_QUALITY_MATERIAL';
    public const ECP_HIGH_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter = 'ECP_HIGH_QUALITY_MATERIAL';
    public const ECP_LOW_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter = 'ECP_LOW_QUALITY_MATERIAL';
    public const FIRST_PUBLISH_MATERIAL_FileMaterialListV2PropertiesFilter = 'FIRST_PUBLISH_MATERIAL';
    public const INEFFICIENT_MATERIAL_FileMaterialListV2PropertiesFilter = 'INEFFICIENT_MATERIAL';
    public const SIMILAR_MATERIAL_FileMaterialListV2PropertiesFilter = 'SIMILAR_MATERIAL';
    public const SIMILAR_QUEUE_MATERIAL_FileMaterialListV2PropertiesFilter = 'SIMILAR_QUEUE_MATERIAL';

    public const ALLOWED_VALUES = [
        self::AD_HIGH_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter,
        self::AD_LOW_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter,
        self::ECP_HIGH_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter,
        self::ECP_LOW_QUALITY_MATERIAL_FileMaterialListV2PropertiesFilter,
        self::FIRST_PUBLISH_MATERIAL_FileMaterialListV2PropertiesFilter,
        self::INEFFICIENT_MATERIAL_FileMaterialListV2PropertiesFilter,
        self::SIMILAR_MATERIAL_FileMaterialListV2PropertiesFilter,
        self::SIMILAR_QUEUE_MATERIAL_FileMaterialListV2PropertiesFilter,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileMaterialListV2PropertiesFilter', $value));
        }
        return (string) $value;
    }
}
