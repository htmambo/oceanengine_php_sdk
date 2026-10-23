<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroGameCreateV30SchemaInfoOperateType
{
    public const CREATE_ToolsEbpMicroGameCreateV30SchemaInfoOperateType = 'CREATE';

    public const ALLOWED_VALUES = [
        self::CREATE_ToolsEbpMicroGameCreateV30SchemaInfoOperateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroGameCreateV30SchemaInfoOperateType', $value));
        }
        return (string) $value;
    }
}
