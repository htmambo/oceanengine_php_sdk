<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2DataListRealRecallMatchType
{
    public const EXTENSIVE_ReportCampaignGetV2DataListRealRecallMatchType = 'EXTENSIVE';
    public const PRECISION_ReportCampaignGetV2DataListRealRecallMatchType = 'PRECISION';
    public const PHRASE_ReportCampaignGetV2DataListRealRecallMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_ReportCampaignGetV2DataListRealRecallMatchType,
        self::PRECISION_ReportCampaignGetV2DataListRealRecallMatchType,
        self::PHRASE_ReportCampaignGetV2DataListRealRecallMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2DataListRealRecallMatchType', $value));
        }
        return (string) $value;
    }
}
