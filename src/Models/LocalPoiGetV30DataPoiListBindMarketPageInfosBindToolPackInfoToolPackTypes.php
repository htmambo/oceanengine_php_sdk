<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes
{
    public const TOOL_TYPE_CONSULT_LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes = 'TOOL_TYPE_CONSULT';
    public const TOOL_TYPE_FORM_LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes = 'TOOL_TYPE_FORM';
    public const TOOL_TYPE_PHONE_SMART_LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes = 'TOOL_TYPE_PHONE_SMART';

    public const ALLOWED_VALUES = [
        self::TOOL_TYPE_CONSULT_LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes,
        self::TOOL_TYPE_FORM_LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes,
        self::TOOL_TYPE_PHONE_SMART_LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPoiGetV30DataPoiListBindMarketPageInfosBindToolPackInfoToolPackTypes', $value));
        }
        return (string) $value;
    }
}
