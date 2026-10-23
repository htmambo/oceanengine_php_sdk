<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpSubjectListV30DataCompanyBasicInfosStatus
{
    public const AVAILABLE_ToolsEbpSubjectListV30DataCompanyBasicInfosStatus = 'AVAILABLE';
    public const AVAILABLE_EVER_ToolsEbpSubjectListV30DataCompanyBasicInfosStatus = 'AVAILABLE_EVER';
    public const UNAVALIABLE_ToolsEbpSubjectListV30DataCompanyBasicInfosStatus = 'UNAVALIABLE';

    public const ALLOWED_VALUES = [
        self::AVAILABLE_ToolsEbpSubjectListV30DataCompanyBasicInfosStatus,
        self::AVAILABLE_EVER_ToolsEbpSubjectListV30DataCompanyBasicInfosStatus,
        self::UNAVALIABLE_ToolsEbpSubjectListV30DataCompanyBasicInfosStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpSubjectListV30DataCompanyBasicInfosStatus', $value));
        }
        return (string) $value;
    }
}
