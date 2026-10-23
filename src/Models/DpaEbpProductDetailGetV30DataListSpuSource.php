<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductDetailGetV30DataListSpuSource
{
    public const YUNTU_SPU_DpaEbpProductDetailGetV30DataListSpuSource = 'YUNTU_SPU';
    public const OUTER_PLATFORM_SPU_DpaEbpProductDetailGetV30DataListSpuSource = 'OUTER_PLATFORM_SPU';
    public const WITHOUT_SPU_DpaEbpProductDetailGetV30DataListSpuSource = 'WITHOUT_SPU';

    public const ALLOWED_VALUES = [
        self::YUNTU_SPU_DpaEbpProductDetailGetV30DataListSpuSource,
        self::OUTER_PLATFORM_SPU_DpaEbpProductDetailGetV30DataListSpuSource,
        self::WITHOUT_SPU_DpaEbpProductDetailGetV30DataListSpuSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductDetailGetV30DataListSpuSource', $value));
        }
        return (string) $value;
    }
}
