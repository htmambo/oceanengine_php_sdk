<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType
{
    public const INT_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType = 'Int';
    public const BIGINT_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType = 'Bigint';
    public const STRING_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType = 'String';
    public const FLOAT_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType = 'Float';
    public const BOOL_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType = 'Bool';
    public const ENUM_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType = 'Enum';

    public const ALLOWED_VALUES = [
        self::INT_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType,
        self::BIGINT_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType,
        self::STRING_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType,
        self::FLOAT_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType,
        self::BOOL_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType,
        self::ENUM_EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType', $value));
        }
        return (string) $value;
    }
}
