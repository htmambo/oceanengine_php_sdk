<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableValidateV2DataStatus
{
    public const AUDIT_FAIL_ToolsPlayableValidateV2DataStatus = 'AUDIT_FAIL';
    public const AUDIT_SUCCESS_ToolsPlayableValidateV2DataStatus = 'AUDIT_SUCCESS';
    public const VALIDATE_FAIL_ToolsPlayableValidateV2DataStatus = 'VALIDATE_FAIL';
    public const VALIDATE_SUCCESS_ToolsPlayableValidateV2DataStatus = 'VALIDATE_SUCCESS';
    public const VALIDATING_ToolsPlayableValidateV2DataStatus = 'VALIDATING';

    public const ALLOWED_VALUES = [
        self::AUDIT_FAIL_ToolsPlayableValidateV2DataStatus,
        self::AUDIT_SUCCESS_ToolsPlayableValidateV2DataStatus,
        self::VALIDATE_FAIL_ToolsPlayableValidateV2DataStatus,
        self::VALIDATE_SUCCESS_ToolsPlayableValidateV2DataStatus,
        self::VALIDATING_ToolsPlayableValidateV2DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableValidateV2DataStatus', $value));
        }
        return (string) $value;
    }
}
