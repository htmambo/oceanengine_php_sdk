<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2DeliveryMode
{
    public const MANUAL_CampaignCreateV2DeliveryMode = 'MANUAL';
    public const PROCEDURAL_CampaignCreateV2DeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_CampaignCreateV2DeliveryMode,
        self::PROCEDURAL_CampaignCreateV2DeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2DeliveryMode', $value));
        }
        return (string) $value;
    }
}
