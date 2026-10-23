<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAutoExtendTraffic
{
    public const OFF_ProjectListV30DataListAutoExtendTraffic = 'OFF';
    public const ON_ProjectListV30DataListAutoExtendTraffic = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListAutoExtendTraffic,
        self::ON_ProjectListV30DataListAutoExtendTraffic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAutoExtendTraffic', $value));
        }
        return (string) $value;
    }
}
