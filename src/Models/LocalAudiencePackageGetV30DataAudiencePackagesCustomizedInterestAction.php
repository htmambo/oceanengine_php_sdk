<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction
{
    public const INTERESTACTION_AUTO_LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction = 'INTERESTACTION_AUTO';
    public const INTERESTACTION_CUSTOM_LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction = 'INTERESTACTION_CUSTOM';
    public const INTERESTACTION_OFF_LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction = 'INTERESTACTION_OFF';

    public const ALLOWED_VALUES = [
        self::INTERESTACTION_AUTO_LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction,
        self::INTERESTACTION_CUSTOM_LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction,
        self::INTERESTACTION_OFF_LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction', $value));
        }
        return (string) $value;
    }
}
