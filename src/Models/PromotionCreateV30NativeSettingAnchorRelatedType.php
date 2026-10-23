<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30NativeSettingAnchorRelatedType
{
    public const AUTO_PromotionCreateV30NativeSettingAnchorRelatedType = 'AUTO';
    public const OFF_PromotionCreateV30NativeSettingAnchorRelatedType = 'OFF';
    public const SELECT_PromotionCreateV30NativeSettingAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_PromotionCreateV30NativeSettingAnchorRelatedType,
        self::OFF_PromotionCreateV30NativeSettingAnchorRelatedType,
        self::SELECT_PromotionCreateV30NativeSettingAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30NativeSettingAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
