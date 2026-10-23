<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanProductAvailableGetV10DataProductListTags
{
    public const Enum_1_QianchuanProductAvailableGetV10DataProductListTags = '1';
    public const Enum_0_QianchuanProductAvailableGetV10DataProductListTags = '0';

    public const ALLOWED_VALUES = [
        self::Enum_1_QianchuanProductAvailableGetV10DataProductListTags,
        self::Enum_0_QianchuanProductAvailableGetV10DataProductListTags,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanProductAvailableGetV10DataProductListTags', $value));
        }
        return (string) $value;
    }
}
