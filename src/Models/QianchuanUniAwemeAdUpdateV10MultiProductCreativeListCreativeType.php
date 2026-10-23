<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdUpdateV10MultiProductCreativeListCreativeType
{
    public const PROGRAMMATIC_CREATIVE_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListCreativeType = 'PROGRAMMATIC_CREATIVE';

    public const ALLOWED_VALUES = [
        self::PROGRAMMATIC_CREATIVE_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListCreativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdUpdateV10MultiProductCreativeListCreativeType', $value));
        }
        return (string) $value;
    }
}
