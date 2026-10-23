<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRubeexPlayableListV2DataListStatus
{
    public const AUDIT_FAIL_ToolsRubeexPlayableListV2DataListStatus = 'AUDIT_FAIL';
    public const AUDIT_SUCCESS_ToolsRubeexPlayableListV2DataListStatus = 'AUDIT_SUCCESS';
    public const VALIDATE_FAIL_ToolsRubeexPlayableListV2DataListStatus = 'VALIDATE_FAIL';
    public const VALIDATE_SUCCESS_ToolsRubeexPlayableListV2DataListStatus = 'VALIDATE_SUCCESS';
    public const VALIDATING_ToolsRubeexPlayableListV2DataListStatus = 'VALIDATING';

    public const ALLOWED_VALUES = [
        self::AUDIT_FAIL_ToolsRubeexPlayableListV2DataListStatus,
        self::AUDIT_SUCCESS_ToolsRubeexPlayableListV2DataListStatus,
        self::VALIDATE_FAIL_ToolsRubeexPlayableListV2DataListStatus,
        self::VALIDATE_SUCCESS_ToolsRubeexPlayableListV2DataListStatus,
        self::VALIDATING_ToolsRubeexPlayableListV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRubeexPlayableListV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
