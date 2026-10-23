<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30CustomizedInterestAction
{
    public const INTERESTACTION_AUTO_LocalAudiencePackageUpdateV30CustomizedInterestAction = 'INTERESTACTION_AUTO';
    public const INTERESTACTION_CUSTOM_LocalAudiencePackageUpdateV30CustomizedInterestAction = 'INTERESTACTION_CUSTOM';
    public const INTERESTACTION_OFF_LocalAudiencePackageUpdateV30CustomizedInterestAction = 'INTERESTACTION_OFF';

    public const ALLOWED_VALUES = [
        self::INTERESTACTION_AUTO_LocalAudiencePackageUpdateV30CustomizedInterestAction,
        self::INTERESTACTION_CUSTOM_LocalAudiencePackageUpdateV30CustomizedInterestAction,
        self::INTERESTACTION_OFF_LocalAudiencePackageUpdateV30CustomizedInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30CustomizedInterestAction', $value));
        }
        return (string) $value;
    }
}
