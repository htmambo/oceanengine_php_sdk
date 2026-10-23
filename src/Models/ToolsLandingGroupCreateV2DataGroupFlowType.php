<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupCreateV2DataGroupFlowType
{
    public const FLOW_DISTRIBUTION_TYPE_AVERAGE_ToolsLandingGroupCreateV2DataGroupFlowType = 'FLOW_DISTRIBUTION_TYPE_AVERAGE';
    public const FLOW_DISTRIBUTION_TYPE_INTELLIGENCE_ToolsLandingGroupCreateV2DataGroupFlowType = 'FLOW_DISTRIBUTION_TYPE_INTELLIGENCE';

    public const ALLOWED_VALUES = [
        self::FLOW_DISTRIBUTION_TYPE_AVERAGE_ToolsLandingGroupCreateV2DataGroupFlowType,
        self::FLOW_DISTRIBUTION_TYPE_INTELLIGENCE_ToolsLandingGroupCreateV2DataGroupFlowType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupCreateV2DataGroupFlowType', $value));
        }
        return (string) $value;
    }
}
