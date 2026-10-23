<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus
{
    public const APPROVED_QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus = 'APPROVED';
    public const ALLIANCE_AUTO_AUTH_QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus = 'ALLIANCE_AUTO_AUTH';
    public const NO_AUTH_QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus = 'NO_AUTH';

    public const ALLOWED_VALUES = [
        self::APPROVED_QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus,
        self::ALLIANCE_AUTO_AUTH_QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus,
        self::NO_AUTH_QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus', $value));
        }
        return (string) $value;
    }
}
