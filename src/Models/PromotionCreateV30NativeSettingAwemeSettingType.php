<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30NativeSettingAwemeSettingType
{
    public const ALL_PromotionCreateV30NativeSettingAwemeSettingType = 'ALL';
    public const MULTIPLE_PromotionCreateV30NativeSettingAwemeSettingType = 'MULTIPLE';
    public const SINGLE_PromotionCreateV30NativeSettingAwemeSettingType = 'SINGLE';

    public const ALLOWED_VALUES = [
        self::ALL_PromotionCreateV30NativeSettingAwemeSettingType,
        self::MULTIPLE_PromotionCreateV30NativeSettingAwemeSettingType,
        self::SINGLE_PromotionCreateV30NativeSettingAwemeSettingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30NativeSettingAwemeSettingType', $value));
        }
        return (string) $value;
    }
}
