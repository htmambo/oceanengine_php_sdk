<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanImageGetV10FilteringSources
{
    public const CREATIVE_CENTER_QianchuanImageGetV10FilteringSources = 'CREATIVE_CENTER';
    public const E_COMMERCE_QianchuanImageGetV10FilteringSources = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanImageGetV10FilteringSources = 'JI_CHUANG';

    public const ALLOWED_VALUES = [
        self::CREATIVE_CENTER_QianchuanImageGetV10FilteringSources,
        self::E_COMMERCE_QianchuanImageGetV10FilteringSources,
        self::JI_CHUANG_QianchuanImageGetV10FilteringSources,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanImageGetV10FilteringSources', $value));
        }
        return (string) $value;
    }
}
