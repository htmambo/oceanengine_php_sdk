<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType
{
    public const EXTENSIVE_QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType = 'EXTENSIVE';
    public const PHRASE_QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType = 'PHRASE';
    public const PRECISION_QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType,
        self::PHRASE_QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType,
        self::PRECISION_QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType', $value));
        }
        return (string) $value;
    }
}
