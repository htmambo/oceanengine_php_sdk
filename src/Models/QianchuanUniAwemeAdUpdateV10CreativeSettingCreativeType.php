<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdUpdateV10CreativeSettingCreativeType
{
    public const PROGRAMMATIC_CREATIVE_QianchuanUniAwemeAdUpdateV10CreativeSettingCreativeType = 'PROGRAMMATIC_CREATIVE';

    public const ALLOWED_VALUES = [
        self::PROGRAMMATIC_CREATIVE_QianchuanUniAwemeAdUpdateV10CreativeSettingCreativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdUpdateV10CreativeSettingCreativeType', $value));
        }
        return (string) $value;
    }
}
