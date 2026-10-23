<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAudiencePushV10AccountType
{
    public const LOCAL_QianchuanAudiencePushV10AccountType = 'LOCAL';
    public const NO_LOCAL_QianchuanAudiencePushV10AccountType = 'NO_LOCAL';

    public const ALLOWED_VALUES = [
        self::LOCAL_QianchuanAudiencePushV10AccountType,
        self::NO_LOCAL_QianchuanAudiencePushV10AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAudiencePushV10AccountType', $value));
        }
        return (string) $value;
    }
}
