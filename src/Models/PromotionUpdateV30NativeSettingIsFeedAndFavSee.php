<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30NativeSettingIsFeedAndFavSee
{
    public const OFF_PromotionUpdateV30NativeSettingIsFeedAndFavSee = 'OFF';
    public const ON_PromotionUpdateV30NativeSettingIsFeedAndFavSee = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionUpdateV30NativeSettingIsFeedAndFavSee,
        self::ON_PromotionUpdateV30NativeSettingIsFeedAndFavSee,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30NativeSettingIsFeedAndFavSee', $value));
        }
        return (string) $value;
    }
}
