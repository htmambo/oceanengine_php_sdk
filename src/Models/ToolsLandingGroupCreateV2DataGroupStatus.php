<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupCreateV2DataGroupStatus
{
    public const LANDING_GROUP_STATUS_AVAILABLE_ToolsLandingGroupCreateV2DataGroupStatus = 'LANDING_GROUP_STATUS_AVAILABLE';
    public const LANDING_GROUP_STATUS_UNAVAILABLE_ToolsLandingGroupCreateV2DataGroupStatus = 'LANDING_GROUP_STATUS_UNAVAILABLE';

    public const ALLOWED_VALUES = [
        self::LANDING_GROUP_STATUS_AVAILABLE_ToolsLandingGroupCreateV2DataGroupStatus,
        self::LANDING_GROUP_STATUS_UNAVAILABLE_ToolsLandingGroupCreateV2DataGroupStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupCreateV2DataGroupStatus', $value));
        }
        return (string) $value;
    }
}
