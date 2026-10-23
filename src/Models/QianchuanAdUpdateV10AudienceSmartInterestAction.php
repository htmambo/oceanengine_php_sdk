<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceSmartInterestAction
{
    public const CUSTOM_QianchuanAdUpdateV10AudienceSmartInterestAction = 'CUSTOM';
    public const RECOMMEND_QianchuanAdUpdateV10AudienceSmartInterestAction = 'RECOMMEND';

    public const ALLOWED_VALUES = [
        self::CUSTOM_QianchuanAdUpdateV10AudienceSmartInterestAction,
        self::RECOMMEND_QianchuanAdUpdateV10AudienceSmartInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceSmartInterestAction', $value));
        }
        return (string) $value;
    }
}
