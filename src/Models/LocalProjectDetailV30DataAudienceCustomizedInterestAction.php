<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceCustomizedInterestAction
{
    public const INTERESTACTION_AUTO_LocalProjectDetailV30DataAudienceCustomizedInterestAction = 'INTERESTACTION_AUTO';
    public const INTERESTACTION_CUSTOM_LocalProjectDetailV30DataAudienceCustomizedInterestAction = 'INTERESTACTION_CUSTOM';
    public const INTERESTACTION_OFF_LocalProjectDetailV30DataAudienceCustomizedInterestAction = 'INTERESTACTION_OFF';

    public const ALLOWED_VALUES = [
        self::INTERESTACTION_AUTO_LocalProjectDetailV30DataAudienceCustomizedInterestAction,
        self::INTERESTACTION_CUSTOM_LocalProjectDetailV30DataAudienceCustomizedInterestAction,
        self::INTERESTACTION_OFF_LocalProjectDetailV30DataAudienceCustomizedInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceCustomizedInterestAction', $value));
        }
        return (string) $value;
    }
}
