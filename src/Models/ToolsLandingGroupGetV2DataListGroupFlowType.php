<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupGetV2DataListGroupFlowType
{
    public const FLOW_DISTRIBUTION_TYPE_INTELLIGENCE_ToolsLandingGroupGetV2DataListGroupFlowType = 'FLOW_DISTRIBUTION_TYPE_INTELLIGENCE';
    public const FLOW_DISTRIBUTION_TYPE_AVERAGE_ToolsLandingGroupGetV2DataListGroupFlowType = 'FLOW_DISTRIBUTION_TYPE_AVERAGE';

    public const ALLOWED_VALUES = [
        self::FLOW_DISTRIBUTION_TYPE_INTELLIGENCE_ToolsLandingGroupGetV2DataListGroupFlowType,
        self::FLOW_DISTRIBUTION_TYPE_AVERAGE_ToolsLandingGroupGetV2DataListGroupFlowType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupGetV2DataListGroupFlowType', $value));
        }
        return (string) $value;
    }
}
