<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasCreateBoostItemGroupV2CustomAudienceTagGender
{
    public const FEMALE_StarVasCreateBoostItemGroupV2CustomAudienceTagGender = 'FEMALE';
    public const INFINITE_StarVasCreateBoostItemGroupV2CustomAudienceTagGender = 'INFINITE';
    public const MALE_StarVasCreateBoostItemGroupV2CustomAudienceTagGender = 'MALE';

    public const ALLOWED_VALUES = [
        self::FEMALE_StarVasCreateBoostItemGroupV2CustomAudienceTagGender,
        self::INFINITE_StarVasCreateBoostItemGroupV2CustomAudienceTagGender,
        self::MALE_StarVasCreateBoostItemGroupV2CustomAudienceTagGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasCreateBoostItemGroupV2CustomAudienceTagGender', $value));
        }
        return (string) $value;
    }
}
