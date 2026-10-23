<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2InterestActionMode
{
    public const CUSTOM_AudiencePackageCreateV2InterestActionMode = 'CUSTOM';
    public const RECOMMEND_AudiencePackageCreateV2InterestActionMode = 'RECOMMEND';
    public const UNLIMITED_AudiencePackageCreateV2InterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AudiencePackageCreateV2InterestActionMode,
        self::RECOMMEND_AudiencePackageCreateV2InterestActionMode,
        self::UNLIMITED_AudiencePackageCreateV2InterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2InterestActionMode', $value));
        }
        return (string) $value;
    }
}
