<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType
{
    public const ANCHOR_HOLD_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType = 'ANCHOR_HOLD';
    public const ANCHOR_IDLE_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType = 'ANCHOR_IDLE';
    public const FORBID_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType = 'FORBID';

    public const ALLOWED_VALUES = [
        self::ANCHOR_HOLD_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType,
        self::ANCHOR_IDLE_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType,
        self::FORBID_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType', $value));
        }
        return (string) $value;
    }
}
