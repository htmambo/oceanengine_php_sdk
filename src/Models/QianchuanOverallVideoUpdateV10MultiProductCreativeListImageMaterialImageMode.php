<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallVideoUpdateV10MultiProductCreativeListImageMaterialImageMode
{
    public const RECTANGLE_QianchuanOverallVideoUpdateV10MultiProductCreativeListImageMaterialImageMode = 'RECTANGLE';
    public const SQUARE_QianchuanOverallVideoUpdateV10MultiProductCreativeListImageMaterialImageMode = 'SQUARE';

    public const ALLOWED_VALUES = [
        self::RECTANGLE_QianchuanOverallVideoUpdateV10MultiProductCreativeListImageMaterialImageMode,
        self::SQUARE_QianchuanOverallVideoUpdateV10MultiProductCreativeListImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallVideoUpdateV10MultiProductCreativeListImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
