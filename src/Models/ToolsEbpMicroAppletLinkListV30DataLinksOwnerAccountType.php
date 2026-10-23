<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType
{
    public const AD_ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType = 'AD';
    public const EBP_ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType,
        self::EBP_ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType', $value));
        }
        return (string) $value;
    }
}
