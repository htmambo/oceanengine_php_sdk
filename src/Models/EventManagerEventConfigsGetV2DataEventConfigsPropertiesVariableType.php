<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType
{
    public const INT_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType = 'Int';
    public const BIGINT_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType = 'Bigint';
    public const STRING_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType = 'String';
    public const FLOAT_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType = 'Float';
    public const BOOL_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType = 'Bool';
    public const ENUM_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType = 'Enum';

    public const ALLOWED_VALUES = [
        self::INT_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType,
        self::BIGINT_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType,
        self::STRING_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType,
        self::FLOAT_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType,
        self::BOOL_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType,
        self::ENUM_EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerEventConfigsGetV2DataEventConfigsPropertiesVariableType', $value));
        }
        return (string) $value;
    }
}
