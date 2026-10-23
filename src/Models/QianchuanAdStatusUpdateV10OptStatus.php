<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdStatusUpdateV10OptStatus
{
    public const ENABLE_QianchuanAdStatusUpdateV10OptStatus = 'ENABLE';
    public const DELETE_QianchuanAdStatusUpdateV10OptStatus = 'DELETE';
    public const REVIVE_QianchuanAdStatusUpdateV10OptStatus = 'REVIVE';
    public const DISABLE_QianchuanAdStatusUpdateV10OptStatus = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::ENABLE_QianchuanAdStatusUpdateV10OptStatus,
        self::DELETE_QianchuanAdStatusUpdateV10OptStatus,
        self::REVIVE_QianchuanAdStatusUpdateV10OptStatus,
        self::DISABLE_QianchuanAdStatusUpdateV10OptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdStatusUpdateV10OptStatus', $value));
        }
        return (string) $value;
    }
}
