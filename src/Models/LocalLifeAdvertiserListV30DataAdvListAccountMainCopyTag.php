<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag
{
    public const COPY_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag = 'COPY_ACCOUNT';
    public const MAIN_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag = 'MAIN_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::COPY_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag,
        self::MAIN_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag', $value));
        }
        return (string) $value;
    }
}
