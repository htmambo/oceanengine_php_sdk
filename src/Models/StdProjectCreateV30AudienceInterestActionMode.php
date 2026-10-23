<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceInterestActionMode
{
    public const CUSTOM_StdProjectCreateV30AudienceInterestActionMode = 'CUSTOM';
    public const RECOMMEND_StdProjectCreateV30AudienceInterestActionMode = 'RECOMMEND';
    public const UNLIMITED_StdProjectCreateV30AudienceInterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30AudienceInterestActionMode,
        self::RECOMMEND_StdProjectCreateV30AudienceInterestActionMode,
        self::UNLIMITED_StdProjectCreateV30AudienceInterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceInterestActionMode', $value));
        }
        return (string) $value;
    }
}
