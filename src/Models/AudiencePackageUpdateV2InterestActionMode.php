<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2InterestActionMode
{
    public const CUSTOM_AudiencePackageUpdateV2InterestActionMode = 'CUSTOM';
    public const RECOMMEND_AudiencePackageUpdateV2InterestActionMode = 'RECOMMEND';
    public const UNLIMITED_AudiencePackageUpdateV2InterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AudiencePackageUpdateV2InterestActionMode,
        self::RECOMMEND_AudiencePackageUpdateV2InterestActionMode,
        self::UNLIMITED_AudiencePackageUpdateV2InterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2InterestActionMode', $value));
        }
        return (string) $value;
    }
}
