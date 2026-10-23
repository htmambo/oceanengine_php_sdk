<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30UlinkUrlType
{
    public const UNIVERSAL_LINK_ProjectUpdateV30UlinkUrlType = 'UNIVERSAL_LINK';
    public const APPLINK_ProjectUpdateV30UlinkUrlType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_ProjectUpdateV30UlinkUrlType,
        self::APPLINK_ProjectUpdateV30UlinkUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30UlinkUrlType', $value));
        }
        return (string) $value;
    }
}
