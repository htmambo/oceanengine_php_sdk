<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAudienceListGetV10DataAudiencesListAudienceType
{
    public const BASIC_QianchuanAudienceListGetV10DataAudiencesListAudienceType = 'BASIC';
    public const EXTEND_QianchuanAudienceListGetV10DataAudiencesListAudienceType = 'EXTEND';
    public const UPLOAD_QianchuanAudienceListGetV10DataAudiencesListAudienceType = 'UPLOAD';

    public const ALLOWED_VALUES = [
        self::BASIC_QianchuanAudienceListGetV10DataAudiencesListAudienceType,
        self::EXTEND_QianchuanAudienceListGetV10DataAudiencesListAudienceType,
        self::UPLOAD_QianchuanAudienceListGetV10DataAudiencesListAudienceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAudienceListGetV10DataAudiencesListAudienceType', $value));
        }
        return (string) $value;
    }
}
