<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAssetLinkListV30DataListAccountType
{
    public const AD_ToolsAssetLinkListV30DataListAccountType = 'AD';
    public const BP_ToolsAssetLinkListV30DataListAccountType = 'BP';
    public const STAR_ToolsAssetLinkListV30DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAssetLinkListV30DataListAccountType,
        self::BP_ToolsAssetLinkListV30DataListAccountType,
        self::STAR_ToolsAssetLinkListV30DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAssetLinkListV30DataListAccountType', $value));
        }
        return (string) $value;
    }
}
