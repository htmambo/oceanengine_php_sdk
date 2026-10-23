<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceSmartInterestAction
{
    public const CUSTOM_QianchuanAdCreateV10AudienceSmartInterestAction = 'CUSTOM';
    public const RECOMMEND_QianchuanAdCreateV10AudienceSmartInterestAction = 'RECOMMEND';

    public const ALLOWED_VALUES = [
        self::CUSTOM_QianchuanAdCreateV10AudienceSmartInterestAction,
        self::RECOMMEND_QianchuanAdCreateV10AudienceSmartInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceSmartInterestAction', $value));
        }
        return (string) $value;
    }
}
