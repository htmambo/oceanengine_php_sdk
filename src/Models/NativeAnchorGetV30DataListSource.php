<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetV30DataListSource
{
    public const AUTO_NativeAnchorGetV30DataListSource = 'AUTO';
    public const CUSTOM_NativeAnchorGetV30DataListSource = 'CUSTOM';
    public const REPLACE_DOWNLOAD_NativeAnchorGetV30DataListSource = 'REPLACE_DOWNLOAD';

    public const ALLOWED_VALUES = [
        self::AUTO_NativeAnchorGetV30DataListSource,
        self::CUSTOM_NativeAnchorGetV30DataListSource,
        self::REPLACE_DOWNLOAD_NativeAnchorGetV30DataListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetV30DataListSource', $value));
        }
        return (string) $value;
    }
}
