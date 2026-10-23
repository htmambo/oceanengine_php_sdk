<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceActivateType
{
    public const ONE_MONTH_2_THREE_MONTH_ProjectListV30DataListAudienceActivateType = 'ONE_MONTH_2_THREE_MONTH';
    public const THREE_MONTH_EAILIER_ProjectListV30DataListAudienceActivateType = 'THREE_MONTH_EAILIER';
    public const UNLIMITED_ProjectListV30DataListAudienceActivateType = 'UNLIMITED';
    public const WITH_IN_A_MONTH_ProjectListV30DataListAudienceActivateType = 'WITH_IN_A_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_2_THREE_MONTH_ProjectListV30DataListAudienceActivateType,
        self::THREE_MONTH_EAILIER_ProjectListV30DataListAudienceActivateType,
        self::UNLIMITED_ProjectListV30DataListAudienceActivateType,
        self::WITH_IN_A_MONTH_ProjectListV30DataListAudienceActivateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceActivateType', $value));
        }
        return (string) $value;
    }
}
