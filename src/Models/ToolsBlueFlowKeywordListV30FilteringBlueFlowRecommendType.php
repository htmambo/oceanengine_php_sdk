<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType
{
    public const ORDINARY_ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType = 'ORDINARY';
    public const PREFERRED_ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType = 'PREFERRED';

    public const ALLOWED_VALUES = [
        self::ORDINARY_ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType,
        self::PREFERRED_ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType', $value));
        }
        return (string) $value;
    }
}
