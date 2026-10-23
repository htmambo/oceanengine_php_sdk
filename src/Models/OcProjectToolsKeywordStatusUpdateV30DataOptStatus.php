<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsKeywordStatusUpdateV30DataOptStatus
{
    public const ENABLE_OcProjectToolsKeywordStatusUpdateV30DataOptStatus = 'ENABLE';
    public const DISABLE_OcProjectToolsKeywordStatusUpdateV30DataOptStatus = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::ENABLE_OcProjectToolsKeywordStatusUpdateV30DataOptStatus,
        self::DISABLE_OcProjectToolsKeywordStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsKeywordStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
