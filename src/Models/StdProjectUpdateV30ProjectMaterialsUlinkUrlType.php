<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30ProjectMaterialsUlinkUrlType
{
    public const UNIVERSAL_LINK_StdProjectUpdateV30ProjectMaterialsUlinkUrlType = 'UNIVERSAL_LINK';
    public const APPLINK_StdProjectUpdateV30ProjectMaterialsUlinkUrlType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_StdProjectUpdateV30ProjectMaterialsUlinkUrlType,
        self::APPLINK_StdProjectUpdateV30ProjectMaterialsUlinkUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30ProjectMaterialsUlinkUrlType', $value));
        }
        return (string) $value;
    }
}
