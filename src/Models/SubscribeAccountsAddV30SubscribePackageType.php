<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsAddV30SubscribePackageType
{
    public const APP_SubscribeAccountsAddV30SubscribePackageType = 'APP';
    public const TASK_SubscribeAccountsAddV30SubscribePackageType = 'TASK';

    public const ALLOWED_VALUES = [
        self::APP_SubscribeAccountsAddV30SubscribePackageType,
        self::TASK_SubscribeAccountsAddV30SubscribePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsAddV30SubscribePackageType', $value));
        }
        return (string) $value;
    }
}
