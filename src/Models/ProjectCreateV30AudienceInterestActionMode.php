<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceInterestActionMode
{
    public const CUSTOM_ProjectCreateV30AudienceInterestActionMode = 'CUSTOM';
    public const RECOMMEND_ProjectCreateV30AudienceInterestActionMode = 'RECOMMEND';
    public const UNLIMITED_ProjectCreateV30AudienceInterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectCreateV30AudienceInterestActionMode,
        self::RECOMMEND_ProjectCreateV30AudienceInterestActionMode,
        self::UNLIMITED_ProjectCreateV30AudienceInterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceInterestActionMode', $value));
        }
        return (string) $value;
    }
}
