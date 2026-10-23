<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvertiserTaskCreateV2AccountSource
{
    public const AD_EbpAdvertiserTaskCreateV2AccountSource = 'AD';
    public const LOCAL_EbpAdvertiserTaskCreateV2AccountSource = 'LOCAL';
    public const QIANCHUAN_EbpAdvertiserTaskCreateV2AccountSource = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_EbpAdvertiserTaskCreateV2AccountSource,
        self::LOCAL_EbpAdvertiserTaskCreateV2AccountSource,
        self::QIANCHUAN_EbpAdvertiserTaskCreateV2AccountSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvertiserTaskCreateV2AccountSource', $value));
        }
        return (string) $value;
    }
}
