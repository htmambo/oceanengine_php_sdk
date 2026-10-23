<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel
{
    public const FIRST_StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel = 'FIRST';
    public const SECOND_StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel = 'SECOND';

    public const ALLOWED_VALUES = [
        self::FIRST_StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel,
        self::SECOND_StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel', $value));
        }
        return (string) $value;
    }
}
