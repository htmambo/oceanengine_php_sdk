<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataFormElementsElementType
{
    public const SELECT_ClueCouponDetailV2DataFormElementsElementType = 'SELECT';
    public const TEXT_ClueCouponDetailV2DataFormElementsElementType = 'TEXT';
    public const TEXTAREA_ClueCouponDetailV2DataFormElementsElementType = 'TEXTAREA';
    public const EMAIL_ClueCouponDetailV2DataFormElementsElementType = 'EMAIL';
    public const NAME_ClueCouponDetailV2DataFormElementsElementType = 'NAME';
    public const CHECKBOX_ClueCouponDetailV2DataFormElementsElementType = 'CHECKBOX';
    public const NUMBER_ClueCouponDetailV2DataFormElementsElementType = 'NUMBER';
    public const RADIO_ClueCouponDetailV2DataFormElementsElementType = 'RADIO';
    public const CALCULATOR_ClueCouponDetailV2DataFormElementsElementType = 'CALCULATOR';
    public const SEX_ClueCouponDetailV2DataFormElementsElementType = 'SEX';
    public const CITY_ClueCouponDetailV2DataFormElementsElementType = 'CITY';
    public const DATE_ClueCouponDetailV2DataFormElementsElementType = 'DATE';
    public const TELEPHONE_ClueCouponDetailV2DataFormElementsElementType = 'TELEPHONE';

    public const ALLOWED_VALUES = [
        self::SELECT_ClueCouponDetailV2DataFormElementsElementType,
        self::TEXT_ClueCouponDetailV2DataFormElementsElementType,
        self::TEXTAREA_ClueCouponDetailV2DataFormElementsElementType,
        self::EMAIL_ClueCouponDetailV2DataFormElementsElementType,
        self::NAME_ClueCouponDetailV2DataFormElementsElementType,
        self::CHECKBOX_ClueCouponDetailV2DataFormElementsElementType,
        self::NUMBER_ClueCouponDetailV2DataFormElementsElementType,
        self::RADIO_ClueCouponDetailV2DataFormElementsElementType,
        self::CALCULATOR_ClueCouponDetailV2DataFormElementsElementType,
        self::SEX_ClueCouponDetailV2DataFormElementsElementType,
        self::CITY_ClueCouponDetailV2DataFormElementsElementType,
        self::DATE_ClueCouponDetailV2DataFormElementsElementType,
        self::TELEPHONE_ClueCouponDetailV2DataFormElementsElementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataFormElementsElementType', $value));
        }
        return (string) $value;
    }
}
