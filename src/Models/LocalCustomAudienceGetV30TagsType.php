<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalCustomAudienceGetV30TagsType
{
    public const CUSTOM_LocalCustomAudienceGetV30TagsType = 'CUSTOM';
    public const SYS_RECOMMEND_LocalCustomAudienceGetV30TagsType = 'SYS_RECOMMEND';

    public const ALLOWED_VALUES = [
        self::CUSTOM_LocalCustomAudienceGetV30TagsType,
        self::SYS_RECOMMEND_LocalCustomAudienceGetV30TagsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalCustomAudienceGetV30TagsType', $value));
        }
        return (string) $value;
    }
}
