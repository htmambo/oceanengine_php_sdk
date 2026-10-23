<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeGetV2DataListOptStatus
{
    public const CREATIVE_STATUS_DISABLE_CreativeGetV2DataListOptStatus = 'CREATIVE_STATUS_DISABLE';
    public const CREATIVE_STATUS_ENABLE_CreativeGetV2DataListOptStatus = 'CREATIVE_STATUS_ENABLE';
    public const CREATIVE_STATUS_OTHER_CreativeGetV2DataListOptStatus = 'CREATIVE_STATUS_OTHER';
    public const CREATIVE_STATUS_QUOTA_LIMIT_CreativeGetV2DataListOptStatus = 'CREATIVE_STATUS_QUOTA_LIMIT';

    public const ALLOWED_VALUES = [
        self::CREATIVE_STATUS_DISABLE_CreativeGetV2DataListOptStatus,
        self::CREATIVE_STATUS_ENABLE_CreativeGetV2DataListOptStatus,
        self::CREATIVE_STATUS_OTHER_CreativeGetV2DataListOptStatus,
        self::CREATIVE_STATUS_QUOTA_LIMIT_CreativeGetV2DataListOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeGetV2DataListOptStatus', $value));
        }
        return (string) $value;
    }
}
