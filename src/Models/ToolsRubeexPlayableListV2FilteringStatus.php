<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRubeexPlayableListV2FilteringStatus
{
    public const AUDIT_FAIL_ToolsRubeexPlayableListV2FilteringStatus = 'AUDIT_FAIL';
    public const AUDIT_SUCCESS_ToolsRubeexPlayableListV2FilteringStatus = 'AUDIT_SUCCESS';
    public const VALIDATE_FAIL_ToolsRubeexPlayableListV2FilteringStatus = 'VALIDATE_FAIL';
    public const VALIDATE_SUCCESS_ToolsRubeexPlayableListV2FilteringStatus = 'VALIDATE_SUCCESS';
    public const VALIDATING_ToolsRubeexPlayableListV2FilteringStatus = 'VALIDATING';

    public const ALLOWED_VALUES = [
        self::AUDIT_FAIL_ToolsRubeexPlayableListV2FilteringStatus,
        self::AUDIT_SUCCESS_ToolsRubeexPlayableListV2FilteringStatus,
        self::VALIDATE_FAIL_ToolsRubeexPlayableListV2FilteringStatus,
        self::VALIDATE_SUCCESS_ToolsRubeexPlayableListV2FilteringStatus,
        self::VALIDATING_ToolsRubeexPlayableListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRubeexPlayableListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
