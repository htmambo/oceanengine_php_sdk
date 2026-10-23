<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes
{
    public const ALL_ANCHOR_LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes = 'ALL_ANCHOR';
    public const POI_ANCHOR_LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes = 'POI_ANCHOR';
    public const PRODUCT_ANCHOR_LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes = 'PRODUCT_ANCHOR';

    public const ALLOWED_VALUES = [
        self::ALL_ANCHOR_LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes,
        self::POI_ANCHOR_LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes,
        self::PRODUCT_ANCHOR_LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes', $value));
        }
        return (string) $value;
    }
}
