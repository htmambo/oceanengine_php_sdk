<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetV30DataListAnchorShareType
{
    public const OWN_ANCHOR_NativeAnchorGetV30DataListAnchorShareType = 'OWN_ANCHOR';
    public const SHARE_ANCHOR_NativeAnchorGetV30DataListAnchorShareType = 'SHARE_ANCHOR';

    public const ALLOWED_VALUES = [
        self::OWN_ANCHOR_NativeAnchorGetV30DataListAnchorShareType,
        self::SHARE_ANCHOR_NativeAnchorGetV30DataListAnchorShareType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetV30DataListAnchorShareType', $value));
        }
        return (string) $value;
    }
}
