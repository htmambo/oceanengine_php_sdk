<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportPromotionGetV30FilteringCampaignType
{
    public const GENERAL_LocalReportPromotionGetV30FilteringCampaignType = 'GENERAL';
    public const SEARCHING_LocalReportPromotionGetV30FilteringCampaignType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::GENERAL_LocalReportPromotionGetV30FilteringCampaignType,
        self::SEARCHING_LocalReportPromotionGetV30FilteringCampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportPromotionGetV30FilteringCampaignType', $value));
        }
        return (string) $value;
    }
}
