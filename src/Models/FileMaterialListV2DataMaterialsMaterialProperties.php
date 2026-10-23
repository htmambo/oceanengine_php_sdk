<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileMaterialListV2DataMaterialsMaterialProperties
{
    public const AD_HIGH_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'AD_HIGH_QUALITY_MATERIAL';
    public const AD_LOW_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'AD_LOW_QUALITY_MATERIAL';
    public const AIGC_FileMaterialListV2DataMaterialsMaterialProperties = 'AIGC';
    public const ECP_HIGH_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'ECP_HIGH_QUALITY_MATERIAL';
    public const ECP_LOW_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'ECP_LOW_QUALITY_MATERIAL';
    public const FIRST_PUBLISH_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'FIRST_PUBLISH_MATERIAL';
    public const INEFFICIENT_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'INEFFICIENT_MATERIAL';
    public const SIMILAR_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'SIMILAR_MATERIAL';
    public const SIMILAR_QUEUE_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties = 'SIMILAR_QUEUE_MATERIAL';

    public const ALLOWED_VALUES = [
        self::AD_HIGH_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
        self::AD_LOW_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
        self::AIGC_FileMaterialListV2DataMaterialsMaterialProperties,
        self::ECP_HIGH_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
        self::ECP_LOW_QUALITY_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
        self::FIRST_PUBLISH_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
        self::INEFFICIENT_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
        self::SIMILAR_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
        self::SIMILAR_QUEUE_MATERIAL_FileMaterialListV2DataMaterialsMaterialProperties,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileMaterialListV2DataMaterialsMaterialProperties', $value));
        }
        return (string) $value;
    }
}
