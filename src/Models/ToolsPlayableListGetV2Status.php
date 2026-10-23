<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableListGetV2Status
{
    public const VALIDATE_FAIL_ToolsPlayableListGetV2Status = 'VALIDATE_FAIL';
    public const VALIDATE_SUCCESS_ToolsPlayableListGetV2Status = 'VALIDATE_SUCCESS';
    public const AUDIT_SUCCESS_ToolsPlayableListGetV2Status = 'AUDIT_SUCCESS';
    public const VALIDATING_ToolsPlayableListGetV2Status = 'VALIDATING';
    public const AUDIT_FAIL_ToolsPlayableListGetV2Status = 'AUDIT_FAIL';

    public const ALLOWED_VALUES = [
        self::VALIDATE_FAIL_ToolsPlayableListGetV2Status,
        self::VALIDATE_SUCCESS_ToolsPlayableListGetV2Status,
        self::AUDIT_SUCCESS_ToolsPlayableListGetV2Status,
        self::VALIDATING_ToolsPlayableListGetV2Status,
        self::AUDIT_FAIL_ToolsPlayableListGetV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableListGetV2Status', $value));
        }
        return (string) $value;
    }
}
