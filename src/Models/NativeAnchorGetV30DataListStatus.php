<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetV30DataListStatus
{
    public const AUDIT_FAILD_NativeAnchorGetV30DataListStatus = 'AUDIT_FAILD';
    public const AUDIT_SUCCESS_NativeAnchorGetV30DataListStatus = 'AUDIT_SUCCESS';
    public const CREATE_NativeAnchorGetV30DataListStatus = 'CREATE';
    public const DELETE_NativeAnchorGetV30DataListStatus = 'DELETE';

    public const ALLOWED_VALUES = [
        self::AUDIT_FAILD_NativeAnchorGetV30DataListStatus,
        self::AUDIT_SUCCESS_NativeAnchorGetV30DataListStatus,
        self::CREATE_NativeAnchorGetV30DataListStatus,
        self::DELETE_NativeAnchorGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
