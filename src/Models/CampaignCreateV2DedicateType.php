<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2DedicateType
{
    public const UNSET_CampaignCreateV2DedicateType = 'UNSET';
    public const DEDICATED_CampaignCreateV2DedicateType = 'DEDICATED';

    public const ALLOWED_VALUES = [
        self::UNSET_CampaignCreateV2DedicateType,
        self::DEDICATED_CampaignCreateV2DedicateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2DedicateType', $value));
        }
        return (string) $value;
    }
}
