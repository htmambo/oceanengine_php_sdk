<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameUpdateV30GameLinkOperateType
{
    public const NEW_ToolsMicroGameUpdateV30GameLinkOperateType = 'NEW';
    public const MODIFY_ToolsMicroGameUpdateV30GameLinkOperateType = 'MODIFY';
    public const DELETE_ToolsMicroGameUpdateV30GameLinkOperateType = 'DELETE';

    public const ALLOWED_VALUES = [
        self::NEW_ToolsMicroGameUpdateV30GameLinkOperateType,
        self::MODIFY_ToolsMicroGameUpdateV30GameLinkOperateType,
        self::DELETE_ToolsMicroGameUpdateV30GameLinkOperateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameUpdateV30GameLinkOperateType', $value));
        }
        return (string) $value;
    }
}
