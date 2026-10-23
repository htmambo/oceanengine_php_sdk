<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30InternalAdvertiserInfoClassify
{
    public const CLASSIFY_APPORTION_UniProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_APPORTION';
    public const CLASSIFY_EXCHANGE_UniProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_EXCHANGE';
    public const CLASSIFY_INTERNAL_UniProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_INTERNAL';
    public const CLASSIFY_SALE_UniProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_SALE';
    public const CLASSIFY_SUPPLEMENT_UniProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_SUPPLEMENT';

    public const ALLOWED_VALUES = [
        self::CLASSIFY_APPORTION_UniProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_EXCHANGE_UniProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_INTERNAL_UniProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_SALE_UniProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_SUPPLEMENT_UniProjectCreateV30InternalAdvertiserInfoClassify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30InternalAdvertiserInfoClassify', $value));
        }
        return (string) $value;
    }
}
