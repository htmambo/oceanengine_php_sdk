<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30District
{
    public const ALL_LocalAudiencePackageUpdateV30District = 'ALL';
    public const LOCAL_LocalAudiencePackageUpdateV30District = 'LOCAL';
    public const POI_LocalAudiencePackageUpdateV30District = 'POI';
    public const REGION_LocalAudiencePackageUpdateV30District = 'REGION';

    public const ALLOWED_VALUES = [
        self::ALL_LocalAudiencePackageUpdateV30District,
        self::LOCAL_LocalAudiencePackageUpdateV30District,
        self::POI_LocalAudiencePackageUpdateV30District,
        self::REGION_LocalAudiencePackageUpdateV30District,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30District', $value));
        }
        return (string) $value;
    }
}
