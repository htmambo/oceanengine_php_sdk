<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallVideoCreateV10MultiProductCreativeListImageMaterialImageMode
{
    public const RECTANGLE_QianchuanOverallVideoCreateV10MultiProductCreativeListImageMaterialImageMode = 'RECTANGLE';
    public const SQUARE_QianchuanOverallVideoCreateV10MultiProductCreativeListImageMaterialImageMode = 'SQUARE';

    public const ALLOWED_VALUES = [
        self::RECTANGLE_QianchuanOverallVideoCreateV10MultiProductCreativeListImageMaterialImageMode,
        self::SQUARE_QianchuanOverallVideoCreateV10MultiProductCreativeListImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallVideoCreateV10MultiProductCreativeListImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
