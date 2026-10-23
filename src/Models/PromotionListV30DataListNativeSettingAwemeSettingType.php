<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListNativeSettingAwemeSettingType
{
    public const ALL_PromotionListV30DataListNativeSettingAwemeSettingType = 'ALL';
    public const MULTIPLE_PromotionListV30DataListNativeSettingAwemeSettingType = 'MULTIPLE';
    public const SINGLE_PromotionListV30DataListNativeSettingAwemeSettingType = 'SINGLE';

    public const ALLOWED_VALUES = [
        self::ALL_PromotionListV30DataListNativeSettingAwemeSettingType,
        self::MULTIPLE_PromotionListV30DataListNativeSettingAwemeSettingType,
        self::SINGLE_PromotionListV30DataListNativeSettingAwemeSettingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListNativeSettingAwemeSettingType', $value));
        }
        return (string) $value;
    }
}
