<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10MultiProductCreativeListCreativeMaterialMode
{
    public const CUSTOM_CREATIVE_QianchuanAdUpdateV10MultiProductCreativeListCreativeMaterialMode = 'CUSTOM_CREATIVE';
    public const PROGRAMMATIC_CREATIVE_QianchuanAdUpdateV10MultiProductCreativeListCreativeMaterialMode = 'PROGRAMMATIC_CREATIVE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_CREATIVE_QianchuanAdUpdateV10MultiProductCreativeListCreativeMaterialMode,
        self::PROGRAMMATIC_CREATIVE_QianchuanAdUpdateV10MultiProductCreativeListCreativeMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10MultiProductCreativeListCreativeMaterialMode', $value));
        }
        return (string) $value;
    }
}
