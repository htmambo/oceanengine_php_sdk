<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAigcMaterialGetV2ProjectType
{
    public const OC_PROJECT_ToolsAigcMaterialGetV2ProjectType = 'OC_PROJECT';
    public const PROJECT_ToolsAigcMaterialGetV2ProjectType = 'PROJECT';

    public const ALLOWED_VALUES = [
        self::OC_PROJECT_ToolsAigcMaterialGetV2ProjectType,
        self::PROJECT_ToolsAigcMaterialGetV2ProjectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAigcMaterialGetV2ProjectType', $value));
        }
        return (string) $value;
    }
}
