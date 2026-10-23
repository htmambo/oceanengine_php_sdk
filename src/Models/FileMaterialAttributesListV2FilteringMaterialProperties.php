<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileMaterialAttributesListV2FilteringMaterialProperties
{
    public const AD_HIGH_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'AD_HIGH_QUALITY_MATERIAL';
    public const AD_LOW_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'AD_LOW_QUALITY_MATERIAL';
    public const AIGC_FileMaterialAttributesListV2FilteringMaterialProperties = 'AIGC';
    public const CARRY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'CARRY_MATERIAL';
    public const ECP_HIGH_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'ECP_HIGH_QUALITY_MATERIAL';
    public const ECP_LOW_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'ECP_LOW_QUALITY_MATERIAL';
    public const EXTREMELY_SIMILAR_FileMaterialAttributesListV2FilteringMaterialProperties = 'EXTREMELY_SIMILAR';
    public const FIRST_PUBLISH_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'FIRST_PUBLISH_MATERIAL';
    public const INEFFICIENT_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'INEFFICIENT_MATERIAL';
    public const LOCAL_HIGH_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'LOCAL_HIGH_QUALITY_MATERIAL';
    public const LOCAL_LOW_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'LOCAL_LOW_QUALITY_MATERIAL';
    public const SIMILAR_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'SIMILAR_MATERIAL';
    public const SIMILAR_QUEUE_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties = 'SIMILAR_QUEUE_MATERIAL';

    public const ALLOWED_VALUES = [
        self::AD_HIGH_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::AD_LOW_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::AIGC_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::CARRY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::ECP_HIGH_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::ECP_LOW_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::EXTREMELY_SIMILAR_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::FIRST_PUBLISH_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::INEFFICIENT_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::LOCAL_HIGH_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::LOCAL_LOW_QUALITY_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::SIMILAR_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
        self::SIMILAR_QUEUE_MATERIAL_FileMaterialAttributesListV2FilteringMaterialProperties,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileMaterialAttributesListV2FilteringMaterialProperties', $value));
        }
        return (string) $value;
    }
}
