<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2MarketingPurpose
{
    public const UNLIMITED_CampaignCreateV2MarketingPurpose = 'UNLIMITED';
    public const CONVERSION_CampaignCreateV2MarketingPurpose = 'CONVERSION';
    public const ACKNOWLEDGE_CampaignCreateV2MarketingPurpose = 'ACKNOWLEDGE';
    public const INTENTION_CampaignCreateV2MarketingPurpose = 'INTENTION';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_CampaignCreateV2MarketingPurpose,
        self::CONVERSION_CampaignCreateV2MarketingPurpose,
        self::ACKNOWLEDGE_CampaignCreateV2MarketingPurpose,
        self::INTENTION_CampaignCreateV2MarketingPurpose,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2MarketingPurpose', $value));
        }
        return (string) $value;
    }
}
