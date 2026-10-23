<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30CampaignFilterCampaignStatus
{
    public const DISABLE_BrandOrderListV30CampaignFilterCampaignStatus = 'DISABLE';
    public const DONE_BrandOrderListV30CampaignFilterCampaignStatus = 'DONE';
    public const ENABLE_BrandOrderListV30CampaignFilterCampaignStatus = 'ENABLE';
    public const IS_DEL_BrandOrderListV30CampaignFilterCampaignStatus = 'IS_DEL';
    public const RESUBMITTING_BrandOrderListV30CampaignFilterCampaignStatus = 'RESUBMITTING';
    public const RESUBMIT_FAILED_BrandOrderListV30CampaignFilterCampaignStatus = 'RESUBMIT_FAILED';
    public const SUBMITTING_BrandOrderListV30CampaignFilterCampaignStatus = 'SUBMITTING';
    public const SUBMIT_FAILED_BrandOrderListV30CampaignFilterCampaignStatus = 'SUBMIT_FAILED';
    public const WAIT_RESUBMITTING_BrandOrderListV30CampaignFilterCampaignStatus = 'WAIT_RESUBMITTING';

    public const ALLOWED_VALUES = [
        self::DISABLE_BrandOrderListV30CampaignFilterCampaignStatus,
        self::DONE_BrandOrderListV30CampaignFilterCampaignStatus,
        self::ENABLE_BrandOrderListV30CampaignFilterCampaignStatus,
        self::IS_DEL_BrandOrderListV30CampaignFilterCampaignStatus,
        self::RESUBMITTING_BrandOrderListV30CampaignFilterCampaignStatus,
        self::RESUBMIT_FAILED_BrandOrderListV30CampaignFilterCampaignStatus,
        self::SUBMITTING_BrandOrderListV30CampaignFilterCampaignStatus,
        self::SUBMIT_FAILED_BrandOrderListV30CampaignFilterCampaignStatus,
        self::WAIT_RESUBMITTING_BrandOrderListV30CampaignFilterCampaignStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30CampaignFilterCampaignStatus', $value));
        }
        return (string) $value;
    }
}
