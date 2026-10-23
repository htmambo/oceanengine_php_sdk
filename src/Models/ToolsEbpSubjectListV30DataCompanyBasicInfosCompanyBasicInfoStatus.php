<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus
{
    public const COMPANY_EXIST_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus = 'COMPANY_EXIST';
    public const COMPANY_OCCUPIED_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus = 'COMPANY_OCCUPIED';
    public const COMPANY_OCCUPIED_AND_NOT_HAVE_RELATIONSHIP_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus = 'COMPANY_OCCUPIED_AND_NOT_HAVE_RELATIONSHIP';
    public const NOT_HAVE_RELATION_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus = 'NOT_HAVE_RELATION';
    public const SUCCESS_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus = 'SUCCESS';
    public const UNKOWN_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus = 'UNKOWN';

    public const ALLOWED_VALUES = [
        self::COMPANY_EXIST_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus,
        self::COMPANY_OCCUPIED_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus,
        self::COMPANY_OCCUPIED_AND_NOT_HAVE_RELATIONSHIP_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus,
        self::NOT_HAVE_RELATION_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus,
        self::SUCCESS_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus,
        self::UNKOWN_ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpSubjectListV30DataCompanyBasicInfosCompanyBasicInfoStatus', $value));
        }
        return (string) $value;
    }
}
