<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2ConvertedTimeDuration
{
    public const TWELVE_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration = 'TWELVE_MONTH';
    public const TODAY_AudiencePackageUpdateV2ConvertedTimeDuration = 'TODAY';
    public const THREE_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration = 'THREE_MONTH';
    public const ONE_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_AudiencePackageUpdateV2ConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration = 'SIX_MONTH';
    public const NONE_AudiencePackageUpdateV2ConvertedTimeDuration = 'NONE';

    public const ALLOWED_VALUES = [
        self::TWELVE_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration,
        self::TODAY_AudiencePackageUpdateV2ConvertedTimeDuration,
        self::THREE_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration,
        self::ONE_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration,
        self::SEVEN_DAY_AudiencePackageUpdateV2ConvertedTimeDuration,
        self::SIX_MONTH_AudiencePackageUpdateV2ConvertedTimeDuration,
        self::NONE_AudiencePackageUpdateV2ConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2ConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
