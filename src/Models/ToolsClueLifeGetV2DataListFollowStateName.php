<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListFollowStateName
{
    public const NOT_CALLED_ToolsClueLifeGetV2DataListFollowStateName = 'NOT_CALLED';
    public const NOT_ANSWERED_ToolsClueLifeGetV2DataListFollowStateName = 'NOT_ANSWERED';
    public const SHORT_ANSWERED_ToolsClueLifeGetV2DataListFollowStateName = 'SHORT_ANSWERED';
    public const ANSWERED_ToolsClueLifeGetV2DataListFollowStateName = 'ANSWERED';
    public const DEEP_ANSWERED_ToolsClueLifeGetV2DataListFollowStateName = 'DEEP_ANSWERED';

    public const ALLOWED_VALUES = [
        self::NOT_CALLED_ToolsClueLifeGetV2DataListFollowStateName,
        self::NOT_ANSWERED_ToolsClueLifeGetV2DataListFollowStateName,
        self::SHORT_ANSWERED_ToolsClueLifeGetV2DataListFollowStateName,
        self::ANSWERED_ToolsClueLifeGetV2DataListFollowStateName,
        self::DEEP_ANSWERED_ToolsClueLifeGetV2DataListFollowStateName,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListFollowStateName', $value));
        }
        return (string) $value;
    }
}
