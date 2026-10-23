<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceInterestActionMode
{
    public const CUSTOM_StdProjectUpdateV30AudienceInterestActionMode = 'CUSTOM';
    public const RECOMMEND_StdProjectUpdateV30AudienceInterestActionMode = 'RECOMMEND';
    public const UNLIMITED_StdProjectUpdateV30AudienceInterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectUpdateV30AudienceInterestActionMode,
        self::RECOMMEND_StdProjectUpdateV30AudienceInterestActionMode,
        self::UNLIMITED_StdProjectUpdateV30AudienceInterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceInterestActionMode', $value));
        }
        return (string) $value;
    }
}
