<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes
{
    public const TOOL_TYPE_CONSULT_LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes = 'TOOL_TYPE_CONSULT';
    public const TOOL_TYPE_FORM_LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes = 'TOOL_TYPE_FORM';
    public const TOOL_TYPE_PHONE_SMART_LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes = 'TOOL_TYPE_PHONE_SMART';

    public const ALLOWED_VALUES = [
        self::TOOL_TYPE_CONSULT_LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes,
        self::TOOL_TYPE_FORM_LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes,
        self::TOOL_TYPE_PHONE_SMART_LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes', $value));
        }
        return (string) $value;
    }
}
