<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceInterestActionMode
{
    public const CUSTOM_AdGetV2DataAudienceInterestActionMode = 'CUSTOM';
    public const RECOMMEND_AdGetV2DataAudienceInterestActionMode = 'RECOMMEND';
    public const UNLIMITED_AdGetV2DataAudienceInterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AdGetV2DataAudienceInterestActionMode,
        self::RECOMMEND_AdGetV2DataAudienceInterestActionMode,
        self::UNLIMITED_AdGetV2DataAudienceInterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceInterestActionMode', $value));
        }
        return (string) $value;
    }
}
