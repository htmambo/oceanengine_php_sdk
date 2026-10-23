<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueFormDetailV2DataElementsType
{
    public const CALCULATOR_ToolsClueFormDetailV2DataElementsType = 'CALCULATOR';
    public const CHECKBOX_ToolsClueFormDetailV2DataElementsType = 'CHECKBOX';
    public const CITY_ToolsClueFormDetailV2DataElementsType = 'CITY';
    public const DATE_ToolsClueFormDetailV2DataElementsType = 'DATE';
    public const EMAIL_ToolsClueFormDetailV2DataElementsType = 'EMAIL';
    public const NAME_ToolsClueFormDetailV2DataElementsType = 'NAME';
    public const NUMBER_ToolsClueFormDetailV2DataElementsType = 'NUMBER';
    public const RADIO_ToolsClueFormDetailV2DataElementsType = 'RADIO';
    public const SELECT_ToolsClueFormDetailV2DataElementsType = 'SELECT';
    public const SEX_ToolsClueFormDetailV2DataElementsType = 'SEX';
    public const TELEPHONE_ToolsClueFormDetailV2DataElementsType = 'TELEPHONE';
    public const TEXT_ToolsClueFormDetailV2DataElementsType = 'TEXT';
    public const TEXTAREA_ToolsClueFormDetailV2DataElementsType = 'TEXTAREA';

    public const ALLOWED_VALUES = [
        self::CALCULATOR_ToolsClueFormDetailV2DataElementsType,
        self::CHECKBOX_ToolsClueFormDetailV2DataElementsType,
        self::CITY_ToolsClueFormDetailV2DataElementsType,
        self::DATE_ToolsClueFormDetailV2DataElementsType,
        self::EMAIL_ToolsClueFormDetailV2DataElementsType,
        self::NAME_ToolsClueFormDetailV2DataElementsType,
        self::NUMBER_ToolsClueFormDetailV2DataElementsType,
        self::RADIO_ToolsClueFormDetailV2DataElementsType,
        self::SELECT_ToolsClueFormDetailV2DataElementsType,
        self::SEX_ToolsClueFormDetailV2DataElementsType,
        self::TELEPHONE_ToolsClueFormDetailV2DataElementsType,
        self::TEXT_ToolsClueFormDetailV2DataElementsType,
        self::TEXTAREA_ToolsClueFormDetailV2DataElementsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueFormDetailV2DataElementsType', $value));
        }
        return (string) $value;
    }
}
