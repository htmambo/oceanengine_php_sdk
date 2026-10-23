<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupGetV2DataListGroupStatus
{
    public const LANDING_GROUP_STATUS_AVAILABLE_ToolsLandingGroupGetV2DataListGroupStatus = 'LANDING_GROUP_STATUS_AVAILABLE';
    public const LANDING_GROUP_STATUS_UNAVAILABLE_ToolsLandingGroupGetV2DataListGroupStatus = 'LANDING_GROUP_STATUS_UNAVAILABLE';

    public const ALLOWED_VALUES = [
        self::LANDING_GROUP_STATUS_AVAILABLE_ToolsLandingGroupGetV2DataListGroupStatus,
        self::LANDING_GROUP_STATUS_UNAVAILABLE_ToolsLandingGroupGetV2DataListGroupStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupGetV2DataListGroupStatus', $value));
        }
        return (string) $value;
    }
}
