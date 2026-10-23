<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdCreateV10MultiProductCreativeListImageMaterialImageMode
{
    public const SQUARE_QianchuanUniAwemeAdCreateV10MultiProductCreativeListImageMaterialImageMode = 'SQUARE';

    public const ALLOWED_VALUES = [
        self::SQUARE_QianchuanUniAwemeAdCreateV10MultiProductCreativeListImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdCreateV10MultiProductCreativeListImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
