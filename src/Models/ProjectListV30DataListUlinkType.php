<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListUlinkType
{
    public const UNIVERSAL_LINK_ProjectListV30DataListUlinkType = 'UNIVERSAL_LINK';
    public const APPLINK_ProjectListV30DataListUlinkType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_ProjectListV30DataListUlinkType,
        self::APPLINK_ProjectListV30DataListUlinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListUlinkType', $value));
        }
        return (string) $value;
    }
}
