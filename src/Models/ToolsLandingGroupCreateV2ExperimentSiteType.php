<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupCreateV2ExperimentSiteType
{
    public const OWN_ToolsLandingGroupCreateV2ExperimentSiteType = 'OWN';
    public const THIRD_PARTY_ToolsLandingGroupCreateV2ExperimentSiteType = 'THIRD_PARTY';

    public const ALLOWED_VALUES = [
        self::OWN_ToolsLandingGroupCreateV2ExperimentSiteType,
        self::THIRD_PARTY_ToolsLandingGroupCreateV2ExperimentSiteType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupCreateV2ExperimentSiteType', $value));
        }
        return (string) $value;
    }
}
