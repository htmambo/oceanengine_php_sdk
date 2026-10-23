<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdUpdateV10MultiProductCreativeListImageMaterialImageMode
{
    public const SQUARE_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListImageMaterialImageMode = 'SQUARE';

    public const ALLOWED_VALUES = [
        self::SQUARE_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdUpdateV10MultiProductCreativeListImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
