<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataKeywordsStatus
{
    public const AUDIT_QianchuanAdDetailGetV10DataKeywordsStatus = 'AUDIT';
    public const CONFIRM_QianchuanAdDetailGetV10DataKeywordsStatus = 'CONFIRM';
    public const DELETE_QianchuanAdDetailGetV10DataKeywordsStatus = 'DELETE';
    public const PAUSED_QianchuanAdDetailGetV10DataKeywordsStatus = 'PAUSED';
    public const REJECT_QianchuanAdDetailGetV10DataKeywordsStatus = 'REJECT';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAdDetailGetV10DataKeywordsStatus,
        self::CONFIRM_QianchuanAdDetailGetV10DataKeywordsStatus,
        self::DELETE_QianchuanAdDetailGetV10DataKeywordsStatus,
        self::PAUSED_QianchuanAdDetailGetV10DataKeywordsStatus,
        self::REJECT_QianchuanAdDetailGetV10DataKeywordsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataKeywordsStatus', $value));
        }
        return (string) $value;
    }
}
