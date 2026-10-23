<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30IsCommentDisable
{
    public const OFF_PromotionUpdateV30IsCommentDisable = 'OFF';
    public const ON_PromotionUpdateV30IsCommentDisable = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionUpdateV30IsCommentDisable,
        self::ON_PromotionUpdateV30IsCommentDisable,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30IsCommentDisable', $value));
        }
        return (string) $value;
    }
}
