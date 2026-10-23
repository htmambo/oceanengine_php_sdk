<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionRejectReasonGetV30DataListMaterialRejectType
{
    public const ANCHOR_PromotionRejectReasonGetV30DataListMaterialRejectType = 'ANCHOR';
    public const AWEME_NICK_NAME_PromotionRejectReasonGetV30DataListMaterialRejectType = 'AWEME_NICK_NAME';
    public const CALL_TO_ACTION_PromotionRejectReasonGetV30DataListMaterialRejectType = 'CALL_TO_ACTION';
    public const CREATIVE_CAROUSEL_PromotionRejectReasonGetV30DataListMaterialRejectType = 'CREATIVE_CAROUSEL';
    public const CREATIVE_COMPONENT_PromotionRejectReasonGetV30DataListMaterialRejectType = 'CREATIVE_COMPONENT';
    public const CREATIVE_IMAGE_PromotionRejectReasonGetV30DataListMaterialRejectType = 'CREATIVE_IMAGE';
    public const CREATIVE_TITLE_PromotionRejectReasonGetV30DataListMaterialRejectType = 'CREATIVE_TITLE';
    public const CREATIVE_URL_PromotionRejectReasonGetV30DataListMaterialRejectType = 'CREATIVE_URL';
    public const CREATIVE_VIDEO_PromotionRejectReasonGetV30DataListMaterialRejectType = 'CREATIVE_VIDEO';
    public const OPEN_URL_PromotionRejectReasonGetV30DataListMaterialRejectType = 'OPEN_URL';
    public const PRODUCT_PromotionRejectReasonGetV30DataListMaterialRejectType = 'PRODUCT';
    public const PRODUCT_DESCRIBE_PromotionRejectReasonGetV30DataListMaterialRejectType = 'PRODUCT_DESCRIBE';
    public const PRODUCT_IMAGE_PromotionRejectReasonGetV30DataListMaterialRejectType = 'PRODUCT_IMAGE';
    public const PRODUCT_SELLING_POINTS_PromotionRejectReasonGetV30DataListMaterialRejectType = 'PRODUCT_SELLING_POINTS';

    public const ALLOWED_VALUES = [
        self::ANCHOR_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::AWEME_NICK_NAME_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::CALL_TO_ACTION_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::CREATIVE_CAROUSEL_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::CREATIVE_COMPONENT_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::CREATIVE_IMAGE_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::CREATIVE_TITLE_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::CREATIVE_URL_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::CREATIVE_VIDEO_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::OPEN_URL_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::PRODUCT_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::PRODUCT_DESCRIBE_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::PRODUCT_IMAGE_PromotionRejectReasonGetV30DataListMaterialRejectType,
        self::PRODUCT_SELLING_POINTS_PromotionRejectReasonGetV30DataListMaterialRejectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionRejectReasonGetV30DataListMaterialRejectType', $value));
        }
        return (string) $value;
    }
}
