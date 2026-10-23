<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes
{
    public const TOOL_TYPE_CONSULT_LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes = 'TOOL_TYPE_CONSULT';
    public const TOOL_TYPE_FORM_LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes = 'TOOL_TYPE_FORM';
    public const TOOL_TYPE_PHONE_SMART_LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes = 'TOOL_TYPE_PHONE_SMART';

    public const ALLOWED_VALUES = [
        self::TOOL_TYPE_CONSULT_LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes,
        self::TOOL_TYPE_FORM_LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes,
        self::TOOL_TYPE_PHONE_SMART_LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProductGetV30DataProductsBindMarketPageInfosBindToolPackInfoToolPackTypes', $value));
        }
        return (string) $value;
    }
}
