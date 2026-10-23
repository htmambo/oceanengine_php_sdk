<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringRejectReasonType
{
    public const ALL_LocalPromotionListV30FilteringRejectReasonType = 'ALL';
    public const DISCOMFORT_LocalPromotionListV30FilteringRejectReasonType = 'DISCOMFORT';
    public const ELSE_LocalPromotionListV30FilteringRejectReasonType = 'ELSE';
    public const EXAGGERATION_LocalPromotionListV30FilteringRejectReasonType = 'EXAGGERATION';
    public const LOW_MATERAIL_LocalPromotionListV30FilteringRejectReasonType = 'LOW_MATERAIL';
    public const NONE_LocalPromotionListV30FilteringRejectReasonType = 'NONE';
    public const QUALITY_POOR_LocalPromotionListV30FilteringRejectReasonType = 'QUALITY_POOR';
    public const REVIEW_REJECT_LocalPromotionListV30FilteringRejectReasonType = 'REVIEW_REJECT';

    public const ALLOWED_VALUES = [
        self::ALL_LocalPromotionListV30FilteringRejectReasonType,
        self::DISCOMFORT_LocalPromotionListV30FilteringRejectReasonType,
        self::ELSE_LocalPromotionListV30FilteringRejectReasonType,
        self::EXAGGERATION_LocalPromotionListV30FilteringRejectReasonType,
        self::LOW_MATERAIL_LocalPromotionListV30FilteringRejectReasonType,
        self::NONE_LocalPromotionListV30FilteringRejectReasonType,
        self::QUALITY_POOR_LocalPromotionListV30FilteringRejectReasonType,
        self::REVIEW_REJECT_LocalPromotionListV30FilteringRejectReasonType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringRejectReasonType', $value));
        }
        return (string) $value;
    }
}
