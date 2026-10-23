<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportProjectGetV30FilteringCampaignType
{
    public const GENERAL_LocalReportProjectGetV30FilteringCampaignType = 'GENERAL';
    public const SEARCHING_LocalReportProjectGetV30FilteringCampaignType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::GENERAL_LocalReportProjectGetV30FilteringCampaignType,
        self::SEARCHING_LocalReportProjectGetV30FilteringCampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportProjectGetV30FilteringCampaignType', $value));
        }
        return (string) $value;
    }
}
