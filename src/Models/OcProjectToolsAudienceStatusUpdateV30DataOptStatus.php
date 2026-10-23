<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceStatusUpdateV30DataOptStatus
{
    public const ENABLE_OcProjectToolsAudienceStatusUpdateV30DataOptStatus = 'ENABLE';
    public const DISABLE_OcProjectToolsAudienceStatusUpdateV30DataOptStatus = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::ENABLE_OcProjectToolsAudienceStatusUpdateV30DataOptStatus,
        self::DISABLE_OcProjectToolsAudienceStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
