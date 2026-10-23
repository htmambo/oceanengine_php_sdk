<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignUpdateStatusV2OptStatus
{
    public const DELETE_CampaignUpdateStatusV2OptStatus = 'delete';
    public const DISABLE_CampaignUpdateStatusV2OptStatus = 'disable';
    public const ENABLE_CampaignUpdateStatusV2OptStatus = 'enable';

    public const ALLOWED_VALUES = [
        self::DELETE_CampaignUpdateStatusV2OptStatus,
        self::DISABLE_CampaignUpdateStatusV2OptStatus,
        self::ENABLE_CampaignUpdateStatusV2OptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignUpdateStatusV2OptStatus', $value));
        }
        return (string) $value;
    }
}
