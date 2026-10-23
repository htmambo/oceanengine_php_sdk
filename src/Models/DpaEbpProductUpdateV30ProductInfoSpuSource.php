<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductUpdateV30ProductInfoSpuSource
{
    public const YUNTU_SPU_DpaEbpProductUpdateV30ProductInfoSpuSource = 'YUNTU_SPU';
    public const OUTER_PLATFORM_SPU_DpaEbpProductUpdateV30ProductInfoSpuSource = 'OUTER_PLATFORM_SPU';
    public const WITHOUT_SPU_DpaEbpProductUpdateV30ProductInfoSpuSource = 'WITHOUT_SPU';

    public const ALLOWED_VALUES = [
        self::YUNTU_SPU_DpaEbpProductUpdateV30ProductInfoSpuSource,
        self::OUTER_PLATFORM_SPU_DpaEbpProductUpdateV30ProductInfoSpuSource,
        self::WITHOUT_SPU_DpaEbpProductUpdateV30ProductInfoSpuSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductUpdateV30ProductInfoSpuSource', $value));
        }
        return (string) $value;
    }
}
