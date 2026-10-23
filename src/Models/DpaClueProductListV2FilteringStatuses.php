<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaClueProductListV2FilteringStatuses
{
    public const STATUS_OFFLINE_DpaClueProductListV2FilteringStatuses = 'STATUS_OFFLINE';
    public const STATUS_ONLINE_DpaClueProductListV2FilteringStatuses = 'STATUS_ONLINE';

    public const ALLOWED_VALUES = [
        self::STATUS_OFFLINE_DpaClueProductListV2FilteringStatuses,
        self::STATUS_ONLINE_DpaClueProductListV2FilteringStatuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaClueProductListV2FilteringStatuses', $value));
        }
        return (string) $value;
    }
}
