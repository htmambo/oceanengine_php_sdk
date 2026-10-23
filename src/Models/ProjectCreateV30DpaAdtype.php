<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DpaAdtype
{
    public const DPA_APP_ProjectCreateV30DpaAdtype = 'DPA_APP';
    public const DPA_LINK_ProjectCreateV30DpaAdtype = 'DPA_LINK';

    public const ALLOWED_VALUES = [
        self::DPA_APP_ProjectCreateV30DpaAdtype,
        self::DPA_LINK_ProjectCreateV30DpaAdtype,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DpaAdtype', $value));
        }
        return (string) $value;
    }
}
