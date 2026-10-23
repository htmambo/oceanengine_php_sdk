<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroGameUpdateV30SchemaInfoOperateType
{
    public const UPDATE_ToolsEbpMicroGameUpdateV30SchemaInfoOperateType = 'UPDATE';
    public const DELETE_ToolsEbpMicroGameUpdateV30SchemaInfoOperateType = 'DELETE';
    public const CREATE_ToolsEbpMicroGameUpdateV30SchemaInfoOperateType = 'CREATE';

    public const ALLOWED_VALUES = [
        self::UPDATE_ToolsEbpMicroGameUpdateV30SchemaInfoOperateType,
        self::DELETE_ToolsEbpMicroGameUpdateV30SchemaInfoOperateType,
        self::CREATE_ToolsEbpMicroGameUpdateV30SchemaInfoOperateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroGameUpdateV30SchemaInfoOperateType', $value));
        }
        return (string) $value;
    }
}
