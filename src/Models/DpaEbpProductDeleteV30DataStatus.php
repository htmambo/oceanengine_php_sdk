<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductDeleteV30DataStatus
{
    public const FAILD_AD_RELATED_DpaEbpProductDeleteV30DataStatus = 'FAILD_AD_RELATED';
    public const SUCCESS_DpaEbpProductDeleteV30DataStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILD_AD_RELATED_DpaEbpProductDeleteV30DataStatus,
        self::SUCCESS_DpaEbpProductDeleteV30DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductDeleteV30DataStatus', $value));
        }
        return (string) $value;
    }
}
