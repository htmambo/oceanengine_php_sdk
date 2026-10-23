<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType
{
    public const AD_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType = 'AD';
    public const EBP_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType = 'EBP';
    public const LOCAL_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType = 'LOCAL';
    public const QIANCHUAN_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType,
        self::EBP_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType,
        self::LOCAL_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType,
        self::QIANCHUAN_ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthListV30DataAuthorizationsAccountAccountType', $value));
        }
        return (string) $value;
    }
}
