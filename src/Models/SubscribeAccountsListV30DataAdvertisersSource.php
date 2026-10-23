<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsListV30DataAdvertisersSource
{
    public const AUTO_ADD_SubscribeAccountsListV30DataAdvertisersSource = 'AUTO_ADD';
    public const CUSTOM_SubscribeAccountsListV30DataAdvertisersSource = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AUTO_ADD_SubscribeAccountsListV30DataAdvertisersSource,
        self::CUSTOM_SubscribeAccountsListV30DataAdvertisersSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsListV30DataAdvertisersSource', $value));
        }
        return (string) $value;
    }
}
