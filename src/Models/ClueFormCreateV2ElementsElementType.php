<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormCreateV2ElementsElementType
{
    public const SEX_ClueFormCreateV2ElementsElementType = 'SEX';
    public const RADIO_ClueFormCreateV2ElementsElementType = 'RADIO';
    public const EMAIL_ClueFormCreateV2ElementsElementType = 'EMAIL';
    public const TEXT_ClueFormCreateV2ElementsElementType = 'TEXT';
    public const CHECKBOX_ClueFormCreateV2ElementsElementType = 'CHECKBOX';
    public const NAME_ClueFormCreateV2ElementsElementType = 'NAME';
    public const DATE_ClueFormCreateV2ElementsElementType = 'DATE';
    public const SELECT_ClueFormCreateV2ElementsElementType = 'SELECT';
    public const NUMBER_ClueFormCreateV2ElementsElementType = 'NUMBER';
    public const TELEPHONE_ClueFormCreateV2ElementsElementType = 'TELEPHONE';
    public const TEXTAREA_ClueFormCreateV2ElementsElementType = 'TEXTAREA';
    public const CALCULATOR_ClueFormCreateV2ElementsElementType = 'CALCULATOR';
    public const CITY_ClueFormCreateV2ElementsElementType = 'CITY';

    public const ALLOWED_VALUES = [
        self::SEX_ClueFormCreateV2ElementsElementType,
        self::RADIO_ClueFormCreateV2ElementsElementType,
        self::EMAIL_ClueFormCreateV2ElementsElementType,
        self::TEXT_ClueFormCreateV2ElementsElementType,
        self::CHECKBOX_ClueFormCreateV2ElementsElementType,
        self::NAME_ClueFormCreateV2ElementsElementType,
        self::DATE_ClueFormCreateV2ElementsElementType,
        self::SELECT_ClueFormCreateV2ElementsElementType,
        self::NUMBER_ClueFormCreateV2ElementsElementType,
        self::TELEPHONE_ClueFormCreateV2ElementsElementType,
        self::TEXTAREA_ClueFormCreateV2ElementsElementType,
        self::CALCULATOR_ClueFormCreateV2ElementsElementType,
        self::CITY_ClueFormCreateV2ElementsElementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormCreateV2ElementsElementType', $value));
        }
        return (string) $value;
    }
}
