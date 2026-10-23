<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductCreateV30ProductInfoSpuSource
{
    public const YUNTU_SPU_DpaEbpProductCreateV30ProductInfoSpuSource = 'YUNTU_SPU';
    public const OUTER_PLATFORM_SPU_DpaEbpProductCreateV30ProductInfoSpuSource = 'OUTER_PLATFORM_SPU';
    public const WITHOUT_SPU_DpaEbpProductCreateV30ProductInfoSpuSource = 'WITHOUT_SPU';

    public const ALLOWED_VALUES = [
        self::YUNTU_SPU_DpaEbpProductCreateV30ProductInfoSpuSource,
        self::OUTER_PLATFORM_SPU_DpaEbpProductCreateV30ProductInfoSpuSource,
        self::WITHOUT_SPU_DpaEbpProductCreateV30ProductInfoSpuSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductCreateV30ProductInfoSpuSource', $value));
        }
        return (string) $value;
    }
}
