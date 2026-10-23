<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType
{
    public const CREATE_ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType = 'CREATE';
    public const DELETE_ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType = 'DELETE';
    public const UPDATE_ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType = 'UPDATE';

    public const ALLOWED_VALUES = [
        self::CREATE_ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType,
        self::DELETE_ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType,
        self::UPDATE_ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroAppletUpdateV30SchemaInfoOperateType', $value));
        }
        return (string) $value;
    }
}
