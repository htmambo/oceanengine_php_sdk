<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2FilteringDeliveryMode
{
    public const STANDARD_ReportCampaignGetV2FilteringDeliveryMode = 'STANDARD';
    public const ADLAB_FREE_ReportCampaignGetV2FilteringDeliveryMode = 'ADLAB_FREE';

    public const ALLOWED_VALUES = [
        self::STANDARD_ReportCampaignGetV2FilteringDeliveryMode,
        self::ADLAB_FREE_ReportCampaignGetV2FilteringDeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2FilteringDeliveryMode', $value));
        }
        return (string) $value;
    }
}
