<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2FilteringDedicateType
{
    public const UNSET_CampaignGetV2FilteringDedicateType = 'UNSET';
    public const DEDICATED_CampaignGetV2FilteringDedicateType = 'DEDICATED';

    public const ALLOWED_VALUES = [
        self::UNSET_CampaignGetV2FilteringDedicateType,
        self::DEDICATED_CampaignGetV2FilteringDedicateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2FilteringDedicateType', $value));
        }
        return (string) $value;
    }
}
