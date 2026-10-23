<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringLocalDeliveryScene
{
    public const ALL_LocalPromotionListV30FilteringLocalDeliveryScene = 'ALL';
    public const CONTENT_HEAT_LocalPromotionListV30FilteringLocalDeliveryScene = 'CONTENT_HEAT';
    public const EXTERNAL_LocalPromotionListV30FilteringLocalDeliveryScene = 'EXTERNAL';
    public const POI_RECOMMEND_LocalPromotionListV30FilteringLocalDeliveryScene = 'POI_RECOMMEND';
    public const PRODUCT_PAY_LocalPromotionListV30FilteringLocalDeliveryScene = 'PRODUCT_PAY';

    public const ALLOWED_VALUES = [
        self::ALL_LocalPromotionListV30FilteringLocalDeliveryScene,
        self::CONTENT_HEAT_LocalPromotionListV30FilteringLocalDeliveryScene,
        self::EXTERNAL_LocalPromotionListV30FilteringLocalDeliveryScene,
        self::POI_RECOMMEND_LocalPromotionListV30FilteringLocalDeliveryScene,
        self::PRODUCT_PAY_LocalPromotionListV30FilteringLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}
