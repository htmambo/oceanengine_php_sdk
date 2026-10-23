<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2Operation
{
    public const DISABLE_CampaignCreateV2Operation = 'disable';
    public const ENABLE_CampaignCreateV2Operation = 'enable';

    public const ALLOWED_VALUES = [
        self::DISABLE_CampaignCreateV2Operation,
        self::ENABLE_CampaignCreateV2Operation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2Operation', $value));
        }
        return (string) $value;
    }
}
