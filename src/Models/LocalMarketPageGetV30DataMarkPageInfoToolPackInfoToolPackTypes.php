<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes
{
    public const TOOL_TYPE_CONSULT_LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes = 'TOOL_TYPE_CONSULT';
    public const TOOL_TYPE_FORM_LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes = 'TOOL_TYPE_FORM';
    public const TOOL_TYPE_PHONE_SMART_LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes = 'TOOL_TYPE_PHONE_SMART';

    public const ALLOWED_VALUES = [
        self::TOOL_TYPE_CONSULT_LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes,
        self::TOOL_TYPE_FORM_LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes,
        self::TOOL_TYPE_PHONE_SMART_LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalMarketPageGetV30DataMarkPageInfoToolPackInfoToolPackTypes', $value));
        }
        return (string) $value;
    }
}
