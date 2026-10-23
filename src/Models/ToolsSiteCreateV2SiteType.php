<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteCreateV2SiteType
{
    public const STREAMING_ToolsSiteCreateV2SiteType = 'STREAMING';
    public const ECOMMERCEPAGE_ToolsSiteCreateV2SiteType = 'ECOMMERCEPAGE';

    public const ALLOWED_VALUES = [
        self::STREAMING_ToolsSiteCreateV2SiteType,
        self::ECOMMERCEPAGE_ToolsSiteCreateV2SiteType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteCreateV2SiteType', $value));
        }
        return (string) $value;
    }
}
