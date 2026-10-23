<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCampaignListGetV10FilterStatus
{
    public const ALL_QianchuanCampaignListGetV10FilterStatus = 'ALL';
    public const DELETE_QianchuanCampaignListGetV10FilterStatus = 'DELETE';
    public const DISABLE_QianchuanCampaignListGetV10FilterStatus = 'DISABLE';
    public const ENABLE_QianchuanCampaignListGetV10FilterStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanCampaignListGetV10FilterStatus,
        self::DELETE_QianchuanCampaignListGetV10FilterStatus,
        self::DISABLE_QianchuanCampaignListGetV10FilterStatus,
        self::ENABLE_QianchuanCampaignListGetV10FilterStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCampaignListGetV10FilterStatus', $value));
        }
        return (string) $value;
    }
}
