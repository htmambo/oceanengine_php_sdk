<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsRemoveV30SubscribePackageType
{
    public const APP_SubscribeAccountsRemoveV30SubscribePackageType = 'APP';
    public const TASK_SubscribeAccountsRemoveV30SubscribePackageType = 'TASK';

    public const ALLOWED_VALUES = [
        self::APP_SubscribeAccountsRemoveV30SubscribePackageType,
        self::TASK_SubscribeAccountsRemoveV30SubscribePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsRemoveV30SubscribePackageType', $value));
        }
        return (string) $value;
    }
}
