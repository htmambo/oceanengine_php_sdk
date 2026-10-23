<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityCreateAppealV30AppealIdType
{
    public const PROMOTION_SecurityCreateAppealV30AppealIdType = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::PROMOTION_SecurityCreateAppealV30AppealIdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityCreateAppealV30AppealIdType', $value));
        }
        return (string) $value;
    }
}
