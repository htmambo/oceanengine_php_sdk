<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialListV30FilteringEvaluateTypes
{
    public const FIRST_PUBLISH_ToolsEbpMaterialListV30FilteringEvaluateTypes = 'FIRST_PUBLISH';
    public const AD_HIGH_QUALITY_ToolsEbpMaterialListV30FilteringEvaluateTypes = 'AD_HIGH_QUALITY';
    public const ECP_HIGH_QUALITY_ToolsEbpMaterialListV30FilteringEvaluateTypes = 'ECP_HIGH_QUALITY';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_ToolsEbpMaterialListV30FilteringEvaluateTypes,
        self::AD_HIGH_QUALITY_ToolsEbpMaterialListV30FilteringEvaluateTypes,
        self::ECP_HIGH_QUALITY_ToolsEbpMaterialListV30FilteringEvaluateTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialListV30FilteringEvaluateTypes', $value));
        }
        return (string) $value;
    }
}
