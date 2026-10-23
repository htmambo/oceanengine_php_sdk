<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementUpdateAuthorizationV2OperationType
{
    public const ADD_ToolsAppManagementUpdateAuthorizationV2OperationType = 'ADD';
    public const DEL_ToolsAppManagementUpdateAuthorizationV2OperationType = 'DEL';

    public const ALLOWED_VALUES = [
        self::ADD_ToolsAppManagementUpdateAuthorizationV2OperationType,
        self::DEL_ToolsAppManagementUpdateAuthorizationV2OperationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementUpdateAuthorizationV2OperationType', $value));
        }
        return (string) $value;
    }
}
