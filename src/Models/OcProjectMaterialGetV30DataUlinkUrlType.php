<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataUlinkUrlType
{
    public const UNIVERSAL_LINK_OcProjectMaterialGetV30DataUlinkUrlType = 'UNIVERSAL_LINK';
    public const APPLINK_OcProjectMaterialGetV30DataUlinkUrlType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_OcProjectMaterialGetV30DataUlinkUrlType,
        self::APPLINK_OcProjectMaterialGetV30DataUlinkUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataUlinkUrlType', $value));
        }
        return (string) $value;
    }
}
