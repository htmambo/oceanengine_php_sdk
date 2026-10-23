<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes
{
    public const ALLIANCE_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes = 'ALLIANCE';
    public const AWEME_COOPERATOR_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes = 'AWEME_COOPERATOR';
    public const OFFICAIL_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes = 'OFFICAIL';
    public const SELF_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes = 'SELF';

    public const ALLOWED_VALUES = [
        self::ALLIANCE_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes,
        self::AWEME_COOPERATOR_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes,
        self::OFFICAIL_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes,
        self::SELF_QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes', $value));
        }
        return (string) $value;
    }
}
