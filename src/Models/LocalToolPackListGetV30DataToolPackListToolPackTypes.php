<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalToolPackListGetV30DataToolPackListToolPackTypes
{
    public const TOOL_TYPE_CONSULT_LocalToolPackListGetV30DataToolPackListToolPackTypes = 'TOOL_TYPE_CONSULT';
    public const TOOL_TYPE_FORM_LocalToolPackListGetV30DataToolPackListToolPackTypes = 'TOOL_TYPE_FORM';
    public const TOOL_TYPE_PHONE_SMART_LocalToolPackListGetV30DataToolPackListToolPackTypes = 'TOOL_TYPE_PHONE_SMART';

    public const ALLOWED_VALUES = [
        self::TOOL_TYPE_CONSULT_LocalToolPackListGetV30DataToolPackListToolPackTypes,
        self::TOOL_TYPE_FORM_LocalToolPackListGetV30DataToolPackListToolPackTypes,
        self::TOOL_TYPE_PHONE_SMART_LocalToolPackListGetV30DataToolPackListToolPackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalToolPackListGetV30DataToolPackListToolPackTypes', $value));
        }
        return (string) $value;
    }
}
