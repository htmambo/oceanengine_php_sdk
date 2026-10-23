<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAudienceCreateByFileV10MatchType
{
    public const UID_QianchuanAudienceCreateByFileV10MatchType = 'UID';

    public const ALLOWED_VALUES = [
        self::UID_QianchuanAudienceCreateByFileV10MatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAudienceCreateByFileV10MatchType', $value));
        }
        return (string) $value;
    }
}
