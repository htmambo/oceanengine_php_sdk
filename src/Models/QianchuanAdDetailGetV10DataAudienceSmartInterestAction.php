<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceSmartInterestAction
{
    public const CUSTOM_QianchuanAdDetailGetV10DataAudienceSmartInterestAction = 'CUSTOM';
    public const RECOMMEND_QianchuanAdDetailGetV10DataAudienceSmartInterestAction = 'RECOMMEND';

    public const ALLOWED_VALUES = [
        self::CUSTOM_QianchuanAdDetailGetV10DataAudienceSmartInterestAction,
        self::RECOMMEND_QianchuanAdDetailGetV10DataAudienceSmartInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceSmartInterestAction', $value));
        }
        return (string) $value;
    }
}
