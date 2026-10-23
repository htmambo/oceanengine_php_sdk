<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListNativeSettingAnchorRelatedType
{
    public const AUTO_PromotionListV30DataListNativeSettingAnchorRelatedType = 'AUTO';
    public const OFF_PromotionListV30DataListNativeSettingAnchorRelatedType = 'OFF';
    public const SELECT_PromotionListV30DataListNativeSettingAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_PromotionListV30DataListNativeSettingAnchorRelatedType,
        self::OFF_PromotionListV30DataListNativeSettingAnchorRelatedType,
        self::SELECT_PromotionListV30DataListNativeSettingAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListNativeSettingAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
