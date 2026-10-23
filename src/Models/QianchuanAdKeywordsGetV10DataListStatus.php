<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdKeywordsGetV10DataListStatus
{
    public const AUDIT_QianchuanAdKeywordsGetV10DataListStatus = 'AUDIT';
    public const CONFIRM_QianchuanAdKeywordsGetV10DataListStatus = 'CONFIRM';
    public const DELETE_QianchuanAdKeywordsGetV10DataListStatus = 'DELETE';
    public const PAUSED_QianchuanAdKeywordsGetV10DataListStatus = 'PAUSED';
    public const REJECT_QianchuanAdKeywordsGetV10DataListStatus = 'REJECT';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAdKeywordsGetV10DataListStatus,
        self::CONFIRM_QianchuanAdKeywordsGetV10DataListStatus,
        self::DELETE_QianchuanAdKeywordsGetV10DataListStatus,
        self::PAUSED_QianchuanAdKeywordsGetV10DataListStatus,
        self::REJECT_QianchuanAdKeywordsGetV10DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdKeywordsGetV10DataListStatus', $value));
        }
        return (string) $value;
    }
}
