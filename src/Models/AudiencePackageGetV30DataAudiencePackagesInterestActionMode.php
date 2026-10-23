<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesInterestActionMode
{
    public const CUSTOM_AudiencePackageGetV30DataAudiencePackagesInterestActionMode = 'CUSTOM';
    public const RECOMMEND_AudiencePackageGetV30DataAudiencePackagesInterestActionMode = 'RECOMMEND';
    public const UNLIMITED_AudiencePackageGetV30DataAudiencePackagesInterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AudiencePackageGetV30DataAudiencePackagesInterestActionMode,
        self::RECOMMEND_AudiencePackageGetV30DataAudiencePackagesInterestActionMode,
        self::UNLIMITED_AudiencePackageGetV30DataAudiencePackagesInterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesInterestActionMode', $value));
        }
        return (string) $value;
    }
}
