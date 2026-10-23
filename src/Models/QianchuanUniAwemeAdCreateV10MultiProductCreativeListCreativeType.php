<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeType
{
    public const PROGRAMMATIC_CREATIVE_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeType = 'PROGRAMMATIC_CREATIVE';

    public const ALLOWED_VALUES = [
        self::PROGRAMMATIC_CREATIVE_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeType', $value));
        }
        return (string) $value;
    }
}
