<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30CampaignFilterCampaignStatus
{
    public const DISABLE_BrandMaterialListV30CampaignFilterCampaignStatus = 'DISABLE';
    public const DONE_BrandMaterialListV30CampaignFilterCampaignStatus = 'DONE';
    public const ENABLE_BrandMaterialListV30CampaignFilterCampaignStatus = 'ENABLE';
    public const IS_DEL_BrandMaterialListV30CampaignFilterCampaignStatus = 'IS_DEL';
    public const RESUBMITTING_BrandMaterialListV30CampaignFilterCampaignStatus = 'RESUBMITTING';
    public const RESUBMIT_FAILED_BrandMaterialListV30CampaignFilterCampaignStatus = 'RESUBMIT_FAILED';
    public const SUBMITTING_BrandMaterialListV30CampaignFilterCampaignStatus = 'SUBMITTING';
    public const SUBMIT_FAILED_BrandMaterialListV30CampaignFilterCampaignStatus = 'SUBMIT_FAILED';
    public const WAIT_RESUBMITTING_BrandMaterialListV30CampaignFilterCampaignStatus = 'WAIT_RESUBMITTING';

    public const ALLOWED_VALUES = [
        self::DISABLE_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::DONE_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::ENABLE_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::IS_DEL_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::RESUBMITTING_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::RESUBMIT_FAILED_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::SUBMITTING_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::SUBMIT_FAILED_BrandMaterialListV30CampaignFilterCampaignStatus,
        self::WAIT_RESUBMITTING_BrandMaterialListV30CampaignFilterCampaignStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30CampaignFilterCampaignStatus', $value));
        }
        return (string) $value;
    }
}
