<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAudienceListGetV10FilteringAudienceType
{
    public const BASIC_QianchuanAudienceListGetV10FilteringAudienceType = 'BASIC';
    public const EXTEND_QianchuanAudienceListGetV10FilteringAudienceType = 'EXTEND';
    public const UPLOAD_QianchuanAudienceListGetV10FilteringAudienceType = 'UPLOAD';

    public const ALLOWED_VALUES = [
        self::BASIC_QianchuanAudienceListGetV10FilteringAudienceType,
        self::EXTEND_QianchuanAudienceListGetV10FilteringAudienceType,
        self::UPLOAD_QianchuanAudienceListGetV10FilteringAudienceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAudienceListGetV10FilteringAudienceType', $value));
        }
        return (string) $value;
    }
}
