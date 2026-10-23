<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileCarouselListV30OrderOrderType
{
    public const ASC_LocalFileCarouselListV30OrderOrderType = 'ASC';
    public const DESC_LocalFileCarouselListV30OrderOrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_LocalFileCarouselListV30OrderOrderType,
        self::DESC_LocalFileCarouselListV30OrderOrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileCarouselListV30OrderOrderType', $value));
        }
        return (string) $value;
    }
}
