<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30AudienceCustomizedInterestAction
{
    public const INTERESTACTION_AUTO_LocalProjectUpdateV30AudienceCustomizedInterestAction = 'INTERESTACTION_AUTO';
    public const INTERESTACTION_CUSTOM_LocalProjectUpdateV30AudienceCustomizedInterestAction = 'INTERESTACTION_CUSTOM';
    public const INTERESTACTION_OFF_LocalProjectUpdateV30AudienceCustomizedInterestAction = 'INTERESTACTION_OFF';

    public const ALLOWED_VALUES = [
        self::INTERESTACTION_AUTO_LocalProjectUpdateV30AudienceCustomizedInterestAction,
        self::INTERESTACTION_CUSTOM_LocalProjectUpdateV30AudienceCustomizedInterestAction,
        self::INTERESTACTION_OFF_LocalProjectUpdateV30AudienceCustomizedInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30AudienceCustomizedInterestAction', $value));
        }
        return (string) $value;
    }
}
