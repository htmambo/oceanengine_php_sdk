<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileCarouselListV30OrderOrderBy
{
    public const CLICK_CNT_LocalFileCarouselListV30OrderOrderBy = 'CLICK_CNT';
    public const CONVERSION_RATE_LocalFileCarouselListV30OrderOrderBy = 'CONVERSION_RATE';
    public const CONVERT_CNT_LocalFileCarouselListV30OrderOrderBy = 'CONVERT_CNT';
    public const COST_LocalFileCarouselListV30OrderOrderBy = 'COST';
    public const CREATE_TIME_LocalFileCarouselListV30OrderOrderBy = 'CREATE_TIME';

    public const ALLOWED_VALUES = [
        self::CLICK_CNT_LocalFileCarouselListV30OrderOrderBy,
        self::CONVERSION_RATE_LocalFileCarouselListV30OrderOrderBy,
        self::CONVERT_CNT_LocalFileCarouselListV30OrderOrderBy,
        self::COST_LocalFileCarouselListV30OrderOrderBy,
        self::CREATE_TIME_LocalFileCarouselListV30OrderOrderBy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileCarouselListV30OrderOrderBy', $value));
        }
        return (string) $value;
    }
}
