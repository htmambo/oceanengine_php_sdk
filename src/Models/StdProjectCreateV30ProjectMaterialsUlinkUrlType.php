<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsUlinkUrlType
{
    public const UNIVERSAL_LINK_StdProjectCreateV30ProjectMaterialsUlinkUrlType = 'UNIVERSAL_LINK';
    public const APPLINK_StdProjectCreateV30ProjectMaterialsUlinkUrlType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_StdProjectCreateV30ProjectMaterialsUlinkUrlType,
        self::APPLINK_StdProjectCreateV30ProjectMaterialsUlinkUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsUlinkUrlType', $value));
        }
        return (string) $value;
    }
}
