<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeSettingIsHomepageHide
{
    public const Enum_0_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeSettingIsHomepageHide = 0;
    public const Enum_1_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeSettingIsHomepageHide = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeSettingIsHomepageHide,
        self::Enum_1_QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeSettingIsHomepageHide,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeSettingIsHomepageHide', $value));
        }
        return (string) $value;
    }
}
