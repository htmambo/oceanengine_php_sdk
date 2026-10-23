<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringRejectReasonType
{
    public const DISCOMFORT_PromotionListV30FilteringRejectReasonType = 'DISCOMFORT';
    public const ELSE_PromotionListV30FilteringRejectReasonType = 'ELSE';
    public const EXAGGERATION_PromotionListV30FilteringRejectReasonType = 'EXAGGERATION';
    public const LOW_MATERAIL_PromotionListV30FilteringRejectReasonType = 'LOW_MATERAIL';
    public const NONE_PromotionListV30FilteringRejectReasonType = 'NONE';
    public const QUALITY_POOR_PromotionListV30FilteringRejectReasonType = 'QUALITY_POOR';
    public const REVIEW_REJECT_PromotionListV30FilteringRejectReasonType = 'REVIEW_REJECT';

    public const ALLOWED_VALUES = [
        self::DISCOMFORT_PromotionListV30FilteringRejectReasonType,
        self::ELSE_PromotionListV30FilteringRejectReasonType,
        self::EXAGGERATION_PromotionListV30FilteringRejectReasonType,
        self::LOW_MATERAIL_PromotionListV30FilteringRejectReasonType,
        self::NONE_PromotionListV30FilteringRejectReasonType,
        self::QUALITY_POOR_PromotionListV30FilteringRejectReasonType,
        self::REVIEW_REJECT_PromotionListV30FilteringRejectReasonType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringRejectReasonType', $value));
        }
        return (string) $value;
    }
}
