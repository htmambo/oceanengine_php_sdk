<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpVideoAttributesListV30FilteringMaterialProperties
{
    public const AD_HIGH_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties = 'AD_HIGH_QUALITY_MATERIAL';
    public const AD_LOW_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties = 'AD_LOW_QUALITY_MATERIAL';
    public const ECP_HIGH_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties = 'ECP_HIGH_QUALITY_MATERIAL';
    public const ECP_LOW_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties = 'ECP_LOW_QUALITY_MATERIAL';
    public const FIRST_PUBLISH_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties = 'FIRST_PUBLISH_MATERIAL';
    public const INEFFICIENT_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties = 'INEFFICIENT_MATERIAL';

    public const ALLOWED_VALUES = [
        self::AD_HIGH_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties,
        self::AD_LOW_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties,
        self::ECP_HIGH_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties,
        self::ECP_LOW_QUALITY_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties,
        self::FIRST_PUBLISH_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties,
        self::INEFFICIENT_MATERIAL_ToolsEbpVideoAttributesListV30FilteringMaterialProperties,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpVideoAttributesListV30FilteringMaterialProperties', $value));
        }
        return (string) $value;
    }
}
