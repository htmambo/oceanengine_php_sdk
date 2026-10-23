<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class YuntuAudienceLabelCreateV30DataSource
{
    public const ITEM_YuntuAudienceLabelCreateV30DataSource = 'item';
    public const PRODUCT_YuntuAudienceLabelCreateV30DataSource = 'product';
    public const QUERY_YuntuAudienceLabelCreateV30DataSource = 'query';

    public const ALLOWED_VALUES = [
        self::ITEM_YuntuAudienceLabelCreateV30DataSource,
        self::PRODUCT_YuntuAudienceLabelCreateV30DataSource,
        self::QUERY_YuntuAudienceLabelCreateV30DataSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum YuntuAudienceLabelCreateV30DataSource', $value));
        }
        return (string) $value;
    }
}
