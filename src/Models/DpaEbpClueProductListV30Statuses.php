<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductListV30Statuses
{
    public const STATUS_OFFLINE_DpaEbpClueProductListV30Statuses = 'STATUS_OFFLINE';
    public const STATUS_ONLINE_DpaEbpClueProductListV30Statuses = 'STATUS_ONLINE';

    public const ALLOWED_VALUES = [
        self::STATUS_OFFLINE_DpaEbpClueProductListV30Statuses,
        self::STATUS_ONLINE_DpaEbpClueProductListV30Statuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductListV30Statuses', $value));
        }
        return (string) $value;
    }
}
