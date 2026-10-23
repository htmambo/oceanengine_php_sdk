<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteGetV2Status
{
    public const SITE_ALL_ToolsSiteGetV2Status = 'SITE_ALL';
    public const SITE_ONLINE_ToolsSiteGetV2Status = 'SITE_ONLINE';
    public const SITE_OFFLINE_ToolsSiteGetV2Status = 'SITE_OFFLINE';
    public const SITE_REJECTED_ToolsSiteGetV2Status = 'SITE_REJECTED';
    public const SITE_TRASH_ToolsSiteGetV2Status = 'SITE_TRASH';

    public const ALLOWED_VALUES = [
        self::SITE_ALL_ToolsSiteGetV2Status,
        self::SITE_ONLINE_ToolsSiteGetV2Status,
        self::SITE_OFFLINE_ToolsSiteGetV2Status,
        self::SITE_REJECTED_ToolsSiteGetV2Status,
        self::SITE_TRASH_ToolsSiteGetV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteGetV2Status', $value));
        }
        return (string) $value;
    }
}
