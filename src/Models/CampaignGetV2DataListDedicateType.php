<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListDedicateType
{
    public const UNSET_CampaignGetV2DataListDedicateType = 'UNSET';
    public const DEDICATED_CampaignGetV2DataListDedicateType = 'DEDICATED';

    public const ALLOWED_VALUES = [
        self::UNSET_CampaignGetV2DataListDedicateType,
        self::DEDICATED_CampaignGetV2DataListDedicateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListDedicateType', $value));
        }
        return (string) $value;
    }
}
