<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppUpdateV30AppPageOperateType
{
    public const NEW_ToolsMicroAppUpdateV30AppPageOperateType = 'NEW';
    public const MODIFY_ToolsMicroAppUpdateV30AppPageOperateType = 'MODIFY';
    public const DELETE_ToolsMicroAppUpdateV30AppPageOperateType = 'DELETE';

    public const ALLOWED_VALUES = [
        self::NEW_ToolsMicroAppUpdateV30AppPageOperateType,
        self::MODIFY_ToolsMicroAppUpdateV30AppPageOperateType,
        self::DELETE_ToolsMicroAppUpdateV30AppPageOperateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppUpdateV30AppPageOperateType', $value));
        }
        return (string) $value;
    }
}
