<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetV30FilteringStatus
{
    public const AUDIT_FAILD_NativeAnchorGetV30FilteringStatus = 'AUDIT_FAILD';
    public const AUDIT_SUCCESS_NativeAnchorGetV30FilteringStatus = 'AUDIT_SUCCESS';
    public const CREATE_NativeAnchorGetV30FilteringStatus = 'CREATE';
    public const DELETE_NativeAnchorGetV30FilteringStatus = 'DELETE';

    public const ALLOWED_VALUES = [
        self::AUDIT_FAILD_NativeAnchorGetV30FilteringStatus,
        self::AUDIT_SUCCESS_NativeAnchorGetV30FilteringStatus,
        self::CREATE_NativeAnchorGetV30FilteringStatus,
        self::DELETE_NativeAnchorGetV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
