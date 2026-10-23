<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormDetailV2DataFormElementsElementType
{
    public const SELECT_ClueFormDetailV2DataFormElementsElementType = 'SELECT';
    public const TEXT_ClueFormDetailV2DataFormElementsElementType = 'TEXT';
    public const TEXTAREA_ClueFormDetailV2DataFormElementsElementType = 'TEXTAREA';
    public const EMAIL_ClueFormDetailV2DataFormElementsElementType = 'EMAIL';
    public const NAME_ClueFormDetailV2DataFormElementsElementType = 'NAME';
    public const CHECKBOX_ClueFormDetailV2DataFormElementsElementType = 'CHECKBOX';
    public const NUMBER_ClueFormDetailV2DataFormElementsElementType = 'NUMBER';
    public const RADIO_ClueFormDetailV2DataFormElementsElementType = 'RADIO';
    public const CALCULATOR_ClueFormDetailV2DataFormElementsElementType = 'CALCULATOR';
    public const SEX_ClueFormDetailV2DataFormElementsElementType = 'SEX';
    public const CITY_ClueFormDetailV2DataFormElementsElementType = 'CITY';
    public const DATE_ClueFormDetailV2DataFormElementsElementType = 'DATE';
    public const TELEPHONE_ClueFormDetailV2DataFormElementsElementType = 'TELEPHONE';

    public const ALLOWED_VALUES = [
        self::SELECT_ClueFormDetailV2DataFormElementsElementType,
        self::TEXT_ClueFormDetailV2DataFormElementsElementType,
        self::TEXTAREA_ClueFormDetailV2DataFormElementsElementType,
        self::EMAIL_ClueFormDetailV2DataFormElementsElementType,
        self::NAME_ClueFormDetailV2DataFormElementsElementType,
        self::CHECKBOX_ClueFormDetailV2DataFormElementsElementType,
        self::NUMBER_ClueFormDetailV2DataFormElementsElementType,
        self::RADIO_ClueFormDetailV2DataFormElementsElementType,
        self::CALCULATOR_ClueFormDetailV2DataFormElementsElementType,
        self::SEX_ClueFormDetailV2DataFormElementsElementType,
        self::CITY_ClueFormDetailV2DataFormElementsElementType,
        self::DATE_ClueFormDetailV2DataFormElementsElementType,
        self::TELEPHONE_ClueFormDetailV2DataFormElementsElementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormDetailV2DataFormElementsElementType', $value));
        }
        return (string) $value;
    }
}
