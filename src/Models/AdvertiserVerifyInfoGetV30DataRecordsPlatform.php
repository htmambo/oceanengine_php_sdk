<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserVerifyInfoGetV30DataRecordsPlatform
{
    public const AD_AdvertiserVerifyInfoGetV30DataRecordsPlatform = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_AdvertiserVerifyInfoGetV30DataRecordsPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserVerifyInfoGetV30DataRecordsPlatform', $value));
        }
        return (string) $value;
    }
}
