<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoAwemeGetV30ExternalAction
{
    public const OTO_PAY_LocalFileVideoAwemeGetV30ExternalAction = 'OTO_PAY';
    public const POI_RECOMMEND_LocalFileVideoAwemeGetV30ExternalAction = 'POI_RECOMMEND';

    public const ALLOWED_VALUES = [
        self::OTO_PAY_LocalFileVideoAwemeGetV30ExternalAction,
        self::POI_RECOMMEND_LocalFileVideoAwemeGetV30ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoAwemeGetV30ExternalAction', $value));
        }
        return (string) $value;
    }
}
