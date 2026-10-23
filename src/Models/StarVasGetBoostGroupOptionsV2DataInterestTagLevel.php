<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupOptionsV2DataInterestTagLevel
{
    public const FIRST_StarVasGetBoostGroupOptionsV2DataInterestTagLevel = 'FIRST';
    public const SECOND_StarVasGetBoostGroupOptionsV2DataInterestTagLevel = 'SECOND';

    public const ALLOWED_VALUES = [
        self::FIRST_StarVasGetBoostGroupOptionsV2DataInterestTagLevel,
        self::SECOND_StarVasGetBoostGroupOptionsV2DataInterestTagLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupOptionsV2DataInterestTagLevel', $value));
        }
        return (string) $value;
    }
}
