<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListAudiencePlatform
{
    public const ANDROID_UniProjectListGetV30DataListAudiencePlatform = 'ANDROID';
    public const HARMONY_UniProjectListGetV30DataListAudiencePlatform = 'HARMONY';
    public const IOS_UniProjectListGetV30DataListAudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_UniProjectListGetV30DataListAudiencePlatform,
        self::HARMONY_UniProjectListGetV30DataListAudiencePlatform,
        self::IOS_UniProjectListGetV30DataListAudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListAudiencePlatform', $value));
        }
        return (string) $value;
    }
}
