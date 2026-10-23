<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanBatchCampaignStatusUpdateV10OptStatus
{
    public const DELETE_QianchuanBatchCampaignStatusUpdateV10OptStatus = 'DELETE';
    public const DISABLE_QianchuanBatchCampaignStatusUpdateV10OptStatus = 'DISABLE';
    public const ENABLE_QianchuanBatchCampaignStatusUpdateV10OptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DELETE_QianchuanBatchCampaignStatusUpdateV10OptStatus,
        self::DISABLE_QianchuanBatchCampaignStatusUpdateV10OptStatus,
        self::ENABLE_QianchuanBatchCampaignStatusUpdateV10OptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanBatchCampaignStatusUpdateV10OptStatus', $value));
        }
        return (string) $value;
    }
}
