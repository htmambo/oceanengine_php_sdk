<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignListV30FilterCampaignStatus
{
    public const DISABLE_BrandCampaignListV30FilterCampaignStatus = 'DISABLE';
    public const DONE_BrandCampaignListV30FilterCampaignStatus = 'DONE';
    public const ENABLE_BrandCampaignListV30FilterCampaignStatus = 'ENABLE';
    public const IS_DEL_BrandCampaignListV30FilterCampaignStatus = 'IS_DEL';
    public const RESUBMITTING_BrandCampaignListV30FilterCampaignStatus = 'RESUBMITTING';
    public const RESUBMIT_FAILED_BrandCampaignListV30FilterCampaignStatus = 'RESUBMIT_FAILED';
    public const SUBMITTING_BrandCampaignListV30FilterCampaignStatus = 'SUBMITTING';
    public const SUBMIT_FAILED_BrandCampaignListV30FilterCampaignStatus = 'SUBMIT_FAILED';
    public const WAIT_RESUBMITTING_BrandCampaignListV30FilterCampaignStatus = 'WAIT_RESUBMITTING';

    public const ALLOWED_VALUES = [
        self::DISABLE_BrandCampaignListV30FilterCampaignStatus,
        self::DONE_BrandCampaignListV30FilterCampaignStatus,
        self::ENABLE_BrandCampaignListV30FilterCampaignStatus,
        self::IS_DEL_BrandCampaignListV30FilterCampaignStatus,
        self::RESUBMITTING_BrandCampaignListV30FilterCampaignStatus,
        self::RESUBMIT_FAILED_BrandCampaignListV30FilterCampaignStatus,
        self::SUBMITTING_BrandCampaignListV30FilterCampaignStatus,
        self::SUBMIT_FAILED_BrandCampaignListV30FilterCampaignStatus,
        self::WAIT_RESUBMITTING_BrandCampaignListV30FilterCampaignStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignListV30FilterCampaignStatus', $value));
        }
        return (string) $value;
    }
}
