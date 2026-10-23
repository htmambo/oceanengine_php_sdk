<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType
{
    public const ORDINARY_ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType = 'ORDINARY';
    public const PREFERRED_ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType = 'PREFERRED';

    public const ALLOWED_VALUES = [
        self::ORDINARY_ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType,
        self::PREFERRED_ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType', $value));
        }
        return (string) $value;
    }
}
