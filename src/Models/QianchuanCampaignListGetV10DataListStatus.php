<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCampaignListGetV10DataListStatus
{
    public const DELETE_QianchuanCampaignListGetV10DataListStatus = 'DELETE';
    public const DISABLE_QianchuanCampaignListGetV10DataListStatus = 'DISABLE';
    public const ENABLE_QianchuanCampaignListGetV10DataListStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DELETE_QianchuanCampaignListGetV10DataListStatus,
        self::DISABLE_QianchuanCampaignListGetV10DataListStatus,
        self::ENABLE_QianchuanCampaignListGetV10DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCampaignListGetV10DataListStatus', $value));
        }
        return (string) $value;
    }
}
