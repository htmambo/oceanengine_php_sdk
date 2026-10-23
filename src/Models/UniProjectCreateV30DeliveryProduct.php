<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30DeliveryProduct
{
    public const ALBUM_UniProjectCreateV30DeliveryProduct = 'ALBUM';

    public const ALLOWED_VALUES = [
        self::ALBUM_UniProjectCreateV30DeliveryProduct,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30DeliveryProduct', $value));
        }
        return (string) $value;
    }
}
