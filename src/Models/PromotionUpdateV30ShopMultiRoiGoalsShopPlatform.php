<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30ShopMultiRoiGoalsShopPlatform
{
    public const JD_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform = 'JD';
    public const OTHER_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform = 'OTHER';
    public const PDD_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform = 'PDD';
    public const TB_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform = 'TB';

    public const ALLOWED_VALUES = [
        self::JD_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform,
        self::OTHER_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform,
        self::PDD_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform,
        self::TB_PromotionUpdateV30ShopMultiRoiGoalsShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30ShopMultiRoiGoalsShopPlatform', $value));
        }
        return (string) $value;
    }
}
