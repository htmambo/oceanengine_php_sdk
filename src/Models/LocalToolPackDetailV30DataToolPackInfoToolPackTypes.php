<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalToolPackDetailV30DataToolPackInfoToolPackTypes
{
    public const TOOL_TYPE_CONSULT_LocalToolPackDetailV30DataToolPackInfoToolPackTypes = 'TOOL_TYPE_CONSULT';
    public const TOOL_TYPE_FORM_LocalToolPackDetailV30DataToolPackInfoToolPackTypes = 'TOOL_TYPE_FORM';
    public const TOOL_TYPE_PHONE_SMART_LocalToolPackDetailV30DataToolPackInfoToolPackTypes = 'TOOL_TYPE_PHONE_SMART';

    public const ALLOWED_VALUES = [
        self::TOOL_TYPE_CONSULT_LocalToolPackDetailV30DataToolPackInfoToolPackTypes,
        self::TOOL_TYPE_FORM_LocalToolPackDetailV30DataToolPackInfoToolPackTypes,
        self::TOOL_TYPE_PHONE_SMART_LocalToolPackDetailV30DataToolPackInfoToolPackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalToolPackDetailV30DataToolPackInfoToolPackTypes', $value));
        }
        return (string) $value;
    }
}
