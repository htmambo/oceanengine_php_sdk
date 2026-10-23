<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus
{
    public const USED_ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus = 'USED';
    public const UNUSED_ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus = 'UNUSED';

    public const ALLOWED_VALUES = [
        self::USED_ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus,
        self::UNUSED_ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus', $value));
        }
        return (string) $value;
    }
}
