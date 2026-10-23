<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliveryType
{
    public const DURATION_ProjectListV30DataListDeliveryType = 'DURATION';
    public const NORMAL_ProjectListV30DataListDeliveryType = 'NORMAL';
    public const UBX_INTELLIGENT_ProjectListV30DataListDeliveryType = 'UBX_INTELLIGENT';

    public const ALLOWED_VALUES = [
        self::DURATION_ProjectListV30DataListDeliveryType,
        self::NORMAL_ProjectListV30DataListDeliveryType,
        self::UBX_INTELLIGENT_ProjectListV30DataListDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliveryType', $value));
        }
        return (string) $value;
    }
}
