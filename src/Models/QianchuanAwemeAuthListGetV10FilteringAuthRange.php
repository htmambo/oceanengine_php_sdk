<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthListGetV10FilteringAuthRange
{
    public const ALL_QianchuanAwemeAuthListGetV10FilteringAuthRange = 'ALL';
    public const BY_AWEME_QianchuanAwemeAuthListGetV10FilteringAuthRange = 'BY_AWEME';
    public const BY_VIDEO_QianchuanAwemeAuthListGetV10FilteringAuthRange = 'BY_VIDEO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeAuthListGetV10FilteringAuthRange,
        self::BY_AWEME_QianchuanAwemeAuthListGetV10FilteringAuthRange,
        self::BY_VIDEO_QianchuanAwemeAuthListGetV10FilteringAuthRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthListGetV10FilteringAuthRange', $value));
        }
        return (string) $value;
    }
}
