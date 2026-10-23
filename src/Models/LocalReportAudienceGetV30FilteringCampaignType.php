<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAudienceGetV30FilteringCampaignType
{
    public const ALL_LocalReportAudienceGetV30FilteringCampaignType = 'ALL';
    public const GENERAL_LocalReportAudienceGetV30FilteringCampaignType = 'GENERAL';
    public const SEARCHING_LocalReportAudienceGetV30FilteringCampaignType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::ALL_LocalReportAudienceGetV30FilteringCampaignType,
        self::GENERAL_LocalReportAudienceGetV30FilteringCampaignType,
        self::SEARCHING_LocalReportAudienceGetV30FilteringCampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAudienceGetV30FilteringCampaignType', $value));
        }
        return (string) $value;
    }
}
