<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionBlockMaterialGetV10OrderField
{
    public const CREATE_TIME_QianchuanUniPromotionBlockMaterialGetV10OrderField = 'create_time';
    public const PLAY_CNT_QianchuanUniPromotionBlockMaterialGetV10OrderField = 'play_cnt';
    public const LIKE_CNT_QianchuanUniPromotionBlockMaterialGetV10OrderField = 'like_cnt';
    public const STAT_COST_QianchuanUniPromotionBlockMaterialGetV10OrderField = 'stat_cost';

    public const ALLOWED_VALUES = [
        self::CREATE_TIME_QianchuanUniPromotionBlockMaterialGetV10OrderField,
        self::PLAY_CNT_QianchuanUniPromotionBlockMaterialGetV10OrderField,
        self::LIKE_CNT_QianchuanUniPromotionBlockMaterialGetV10OrderField,
        self::STAT_COST_QianchuanUniPromotionBlockMaterialGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionBlockMaterialGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
