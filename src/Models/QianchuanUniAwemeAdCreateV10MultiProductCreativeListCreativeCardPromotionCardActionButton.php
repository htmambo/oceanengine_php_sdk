<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton
{
    public const Enum_专属优惠_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '专属优惠';
    public const Enum_了解更多_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '了解更多';
    public const Enum_去逛逛_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '去逛逛';
    public const Enum_更多秒杀_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '更多秒杀';
    public const Enum_更多精彩_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '更多精彩';
    public const Enum_查看详情_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '查看详情';
    public const Enum_立即抢购_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '立即抢购';
    public const Enum_领取福利_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton = '领取福利';

    public const ALLOWED_VALUES = [
        self::Enum_专属优惠_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
        self::Enum_了解更多_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
        self::Enum_去逛逛_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
        self::Enum_更多秒杀_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
        self::Enum_更多精彩_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
        self::Enum_查看详情_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
        self::Enum_立即抢购_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
        self::Enum_领取福利_QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton', $value));
        }
        return (string) $value;
    }
}
