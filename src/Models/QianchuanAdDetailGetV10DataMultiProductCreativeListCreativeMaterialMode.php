<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode
{
    public const CUSTOM_CREATIVE_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode = 'CUSTOM_CREATIVE';
    public const PROGRAMMATIC_CREATIVE_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode = 'PROGRAMMATIC_CREATIVE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_CREATIVE_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode,
        self::PROGRAMMATIC_CREATIVE_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode', $value));
        }
        return (string) $value;
    }
}
