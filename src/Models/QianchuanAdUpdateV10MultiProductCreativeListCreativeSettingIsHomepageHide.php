<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide
{
    public const Enum_0_QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide = 0;
    public const Enum_1_QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide,
        self::Enum_1_QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide', $value));
        }
        return (string) $value;
    }
}
