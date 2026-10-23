<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30DataPromotionListLocalDeliveryScene
{
    public const CONTENT_HEAT_LocalPromotionListV30DataPromotionListLocalDeliveryScene = 'CONTENT_HEAT';
    public const EXTERNAL_LocalPromotionListV30DataPromotionListLocalDeliveryScene = 'EXTERNAL';
    public const POI_RECOMMEND_LocalPromotionListV30DataPromotionListLocalDeliveryScene = 'POI_RECOMMEND';
    public const PRODUCT_PAY_LocalPromotionListV30DataPromotionListLocalDeliveryScene = 'PRODUCT_PAY';

    public const ALLOWED_VALUES = [
        self::CONTENT_HEAT_LocalPromotionListV30DataPromotionListLocalDeliveryScene,
        self::EXTERNAL_LocalPromotionListV30DataPromotionListLocalDeliveryScene,
        self::POI_RECOMMEND_LocalPromotionListV30DataPromotionListLocalDeliveryScene,
        self::PRODUCT_PAY_LocalPromotionListV30DataPromotionListLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30DataPromotionListLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}
