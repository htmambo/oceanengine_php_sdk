<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignListV30DataCampaignsCampaignStatus
{
    public const DISABLE_BrandCampaignListV30DataCampaignsCampaignStatus = 'DISABLE';
    public const DONE_BrandCampaignListV30DataCampaignsCampaignStatus = 'DONE';
    public const ENABLE_BrandCampaignListV30DataCampaignsCampaignStatus = 'ENABLE';
    public const IS_DEL_BrandCampaignListV30DataCampaignsCampaignStatus = 'IS_DEL';
    public const RESUBMITTING_BrandCampaignListV30DataCampaignsCampaignStatus = 'RESUBMITTING';
    public const RESUBMIT_FAILED_BrandCampaignListV30DataCampaignsCampaignStatus = 'RESUBMIT_FAILED';
    public const SUBMITTING_BrandCampaignListV30DataCampaignsCampaignStatus = 'SUBMITTING';
    public const SUBMIT_FAILED_BrandCampaignListV30DataCampaignsCampaignStatus = 'SUBMIT_FAILED';
    public const WAIT_RESUBMITTING_BrandCampaignListV30DataCampaignsCampaignStatus = 'WAIT_RESUBMITTING';

    public const ALLOWED_VALUES = [
        self::DISABLE_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::DONE_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::ENABLE_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::IS_DEL_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::RESUBMITTING_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::RESUBMIT_FAILED_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::SUBMITTING_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::SUBMIT_FAILED_BrandCampaignListV30DataCampaignsCampaignStatus,
        self::WAIT_RESUBMITTING_BrandCampaignListV30DataCampaignsCampaignStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignListV30DataCampaignsCampaignStatus', $value));
        }
        return (string) $value;
    }
}
