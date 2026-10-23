<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListShopMultiRoiGoalsShopPlatform
{
    public const JD_PromotionListV30DataListShopMultiRoiGoalsShopPlatform = 'JD';
    public const OTHER_PromotionListV30DataListShopMultiRoiGoalsShopPlatform = 'OTHER';
    public const PDD_PromotionListV30DataListShopMultiRoiGoalsShopPlatform = 'PDD';
    public const TB_PromotionListV30DataListShopMultiRoiGoalsShopPlatform = 'TB';

    public const ALLOWED_VALUES = [
        self::JD_PromotionListV30DataListShopMultiRoiGoalsShopPlatform,
        self::OTHER_PromotionListV30DataListShopMultiRoiGoalsShopPlatform,
        self::PDD_PromotionListV30DataListShopMultiRoiGoalsShopPlatform,
        self::TB_PromotionListV30DataListShopMultiRoiGoalsShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListShopMultiRoiGoalsShopPlatform', $value));
        }
        return (string) $value;
    }
}
