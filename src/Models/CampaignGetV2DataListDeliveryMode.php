<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListDeliveryMode
{
    public const MANUAL_CampaignGetV2DataListDeliveryMode = 'MANUAL';
    public const PROCEDURAL_CampaignGetV2DataListDeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_CampaignGetV2DataListDeliveryMode,
        self::PROCEDURAL_CampaignGetV2DataListDeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListDeliveryMode', $value));
        }
        return (string) $value;
    }
}
