<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType
{
    public const APPLINK_ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType = 'APPLINK';
    public const UNIVERSAL_LINK_ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType = 'UNIVERSAL_LINK';

    public const ALLOWED_VALUES = [
        self::APPLINK_ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType,
        self::UNIVERSAL_LINK_ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType', $value));
        }
        return (string) $value;
    }
}
