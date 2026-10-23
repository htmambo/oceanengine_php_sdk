<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType
{
    public const ANCHOR_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'ANCHOR';
    public const AWEME_NICK_NAME_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'AWEME_NICK_NAME';
    public const CALL_TO_ACTION_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'CALL_TO_ACTION';
    public const CREATIVE_CAROUSEL_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'CREATIVE_CAROUSEL';
    public const CREATIVE_COMPONENT_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'CREATIVE_COMPONENT';
    public const CREATIVE_IMAGE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'CREATIVE_IMAGE';
    public const CREATIVE_TITLE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'CREATIVE_TITLE';
    public const CREATIVE_URL_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'CREATIVE_URL';
    public const CREATIVE_VIDEO_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'CREATIVE_VIDEO';
    public const OPEN_URL_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'OPEN_URL';
    public const PRODUCT_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'PRODUCT';
    public const PRODUCT_DESCRIBE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'PRODUCT_DESCRIBE';
    public const PRODUCT_IMAGE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'PRODUCT_IMAGE';
    public const PRODUCT_SELLING_POINTS_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType = 'PRODUCT_SELLING_POINTS';

    public const ALLOWED_VALUES = [
        self::ANCHOR_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::AWEME_NICK_NAME_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::CALL_TO_ACTION_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::CREATIVE_CAROUSEL_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::CREATIVE_COMPONENT_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::CREATIVE_IMAGE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::CREATIVE_TITLE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::CREATIVE_URL_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::CREATIVE_VIDEO_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::OPEN_URL_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::PRODUCT_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::PRODUCT_DESCRIBE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::PRODUCT_IMAGE_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
        self::PRODUCT_SELLING_POINTS_PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType', $value));
        }
        return (string) $value;
    }
}
