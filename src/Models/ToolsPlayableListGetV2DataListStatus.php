<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableListGetV2DataListStatus
{
    public const VALIDATE_FAIL_ToolsPlayableListGetV2DataListStatus = 'VALIDATE_FAIL';
    public const VALIDATE_SUCCESS_ToolsPlayableListGetV2DataListStatus = 'VALIDATE_SUCCESS';
    public const AUDIT_SUCCESS_ToolsPlayableListGetV2DataListStatus = 'AUDIT_SUCCESS';
    public const VALIDATING_ToolsPlayableListGetV2DataListStatus = 'VALIDATING';
    public const AUDIT_FAIL_ToolsPlayableListGetV2DataListStatus = 'AUDIT_FAIL';

    public const ALLOWED_VALUES = [
        self::VALIDATE_FAIL_ToolsPlayableListGetV2DataListStatus,
        self::VALIDATE_SUCCESS_ToolsPlayableListGetV2DataListStatus,
        self::AUDIT_SUCCESS_ToolsPlayableListGetV2DataListStatus,
        self::VALIDATING_ToolsPlayableListGetV2DataListStatus,
        self::AUDIT_FAIL_ToolsPlayableListGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableListGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
