<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasCreateBoostItemGroupV2CustomAudienceTagAge
{
    public const Enum_18_TO_23_StarVasCreateBoostItemGroupV2CustomAudienceTagAge = '18_TO_23';
    public const Enum_24_TO_30_StarVasCreateBoostItemGroupV2CustomAudienceTagAge = '24_TO_30';
    public const Enum_31_TO_40_StarVasCreateBoostItemGroupV2CustomAudienceTagAge = '31_TO_40';
    public const Enum_41_TO_50_StarVasCreateBoostItemGroupV2CustomAudienceTagAge = '41_TO_50';
    public const INFINITE_StarVasCreateBoostItemGroupV2CustomAudienceTagAge = 'INFINITE';

    public const ALLOWED_VALUES = [
        self::Enum_18_TO_23_StarVasCreateBoostItemGroupV2CustomAudienceTagAge,
        self::Enum_24_TO_30_StarVasCreateBoostItemGroupV2CustomAudienceTagAge,
        self::Enum_31_TO_40_StarVasCreateBoostItemGroupV2CustomAudienceTagAge,
        self::Enum_41_TO_50_StarVasCreateBoostItemGroupV2CustomAudienceTagAge,
        self::INFINITE_StarVasCreateBoostItemGroupV2CustomAudienceTagAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasCreateBoostItemGroupV2CustomAudienceTagAge', $value));
        }
        return (string) $value;
    }
}
