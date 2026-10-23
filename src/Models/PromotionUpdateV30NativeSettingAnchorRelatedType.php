<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30NativeSettingAnchorRelatedType
{
    public const AUTO_PromotionUpdateV30NativeSettingAnchorRelatedType = 'AUTO';
    public const OFF_PromotionUpdateV30NativeSettingAnchorRelatedType = 'OFF';
    public const SELECT_PromotionUpdateV30NativeSettingAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_PromotionUpdateV30NativeSettingAnchorRelatedType,
        self::OFF_PromotionUpdateV30NativeSettingAnchorRelatedType,
        self::SELECT_PromotionUpdateV30NativeSettingAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30NativeSettingAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
