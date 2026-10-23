<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class IosAppListV30DataAppListStatus
{
    public const REVIEWING_IosAppListV30DataAppListStatus = 'REVIEWING';
    public const REVIEW_FAIL_IosAppListV30DataAppListStatus = 'REVIEW_FAIL';
    public const REVIEW_SUCCESS_IosAppListV30DataAppListStatus = 'REVIEW_SUCCESS';

    public const ALLOWED_VALUES = [
        self::REVIEWING_IosAppListV30DataAppListStatus,
        self::REVIEW_FAIL_IosAppListV30DataAppListStatus,
        self::REVIEW_SUCCESS_IosAppListV30DataAppListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum IosAppListV30DataAppListStatus', $value));
        }
        return (string) $value;
    }
}
