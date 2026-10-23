<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30InternalAdvertiserInfoClassify
{
    public const CLASSIFY_APPORTION_StdProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_APPORTION';
    public const CLASSIFY_EXCHANGE_StdProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_EXCHANGE';
    public const CLASSIFY_INTERNAL_StdProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_INTERNAL';
    public const CLASSIFY_SALE_StdProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_SALE';
    public const CLASSIFY_SUPPLEMENT_StdProjectCreateV30InternalAdvertiserInfoClassify = 'CLASSIFY_SUPPLEMENT';

    public const ALLOWED_VALUES = [
        self::CLASSIFY_APPORTION_StdProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_EXCHANGE_StdProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_INTERNAL_StdProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_SALE_StdProjectCreateV30InternalAdvertiserInfoClassify,
        self::CLASSIFY_SUPPLEMENT_StdProjectCreateV30InternalAdvertiserInfoClassify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30InternalAdvertiserInfoClassify', $value));
        }
        return (string) $value;
    }
}
