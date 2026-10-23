<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataCreativeMaterialMode
{
    public const CUSTOM_CREATIVE_QianchuanAdDetailGetV10DataCreativeMaterialMode = 'CUSTOM_CREATIVE';
    public const PROGRAMMATIC_CREATIVE_QianchuanAdDetailGetV10DataCreativeMaterialMode = 'PROGRAMMATIC_CREATIVE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_CREATIVE_QianchuanAdDetailGetV10DataCreativeMaterialMode,
        self::PROGRAMMATIC_CREATIVE_QianchuanAdDetailGetV10DataCreativeMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataCreativeMaterialMode', $value));
        }
        return (string) $value;
    }
}
