<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CustomerCenterAdvertiserListV2AccountSource
{
    public const AD_CustomerCenterAdvertiserListV2AccountSource = 'AD';
    public const LOCAL_CustomerCenterAdvertiserListV2AccountSource = 'LOCAL';
    public const QIANCHUAN_CustomerCenterAdvertiserListV2AccountSource = 'QIANCHUAN';
    public const ENTERPRISE_CustomerCenterAdvertiserListV2AccountSource = 'ENTERPRISE';

    public const ALLOWED_VALUES = [
        self::AD_CustomerCenterAdvertiserListV2AccountSource,
        self::LOCAL_CustomerCenterAdvertiserListV2AccountSource,
        self::QIANCHUAN_CustomerCenterAdvertiserListV2AccountSource,
        self::ENTERPRISE_CustomerCenterAdvertiserListV2AccountSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CustomerCenterAdvertiserListV2AccountSource', $value));
        }
        return (string) $value;
    }
}
