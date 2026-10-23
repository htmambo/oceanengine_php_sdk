<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvertiserListV2AccountSource
{
    public const AD_EbpAdvertiserListV2AccountSource = 'AD';
    public const LOCAL_EbpAdvertiserListV2AccountSource = 'LOCAL';
    public const QIANCHUAN_EbpAdvertiserListV2AccountSource = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_EbpAdvertiserListV2AccountSource,
        self::LOCAL_EbpAdvertiserListV2AccountSource,
        self::QIANCHUAN_EbpAdvertiserListV2AccountSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvertiserListV2AccountSource', $value));
        }
        return (string) $value;
    }
}
