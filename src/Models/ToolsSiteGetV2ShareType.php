<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteGetV2ShareType
{
    public const MY_CREATIONS_ToolsSiteGetV2ShareType = 'MY_CREATIONS';
    public const SHARE_ToolsSiteGetV2ShareType = 'SHARE';
    public const GROUP_ToolsSiteGetV2ShareType = 'GROUP';

    public const ALLOWED_VALUES = [
        self::MY_CREATIONS_ToolsSiteGetV2ShareType,
        self::SHARE_ToolsSiteGetV2ShareType,
        self::GROUP_ToolsSiteGetV2ShareType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteGetV2ShareType', $value));
        }
        return (string) $value;
    }
}
