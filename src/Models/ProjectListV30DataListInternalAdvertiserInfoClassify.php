<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListInternalAdvertiserInfoClassify
{
    public const CLASSIFY_APPORTION_ProjectListV30DataListInternalAdvertiserInfoClassify = 'CLASSIFY_APPORTION';
    public const CLASSIFY_EXCHANGE_ProjectListV30DataListInternalAdvertiserInfoClassify = 'CLASSIFY_EXCHANGE';
    public const CLASSIFY_INTERNAL_ProjectListV30DataListInternalAdvertiserInfoClassify = 'CLASSIFY_INTERNAL';
    public const CLASSIFY_SALE_ProjectListV30DataListInternalAdvertiserInfoClassify = 'CLASSIFY_SALE';
    public const CLASSIFY_SUPPLEMENT_ProjectListV30DataListInternalAdvertiserInfoClassify = 'CLASSIFY_SUPPLEMENT';

    public const ALLOWED_VALUES = [
        self::CLASSIFY_APPORTION_ProjectListV30DataListInternalAdvertiserInfoClassify,
        self::CLASSIFY_EXCHANGE_ProjectListV30DataListInternalAdvertiserInfoClassify,
        self::CLASSIFY_INTERNAL_ProjectListV30DataListInternalAdvertiserInfoClassify,
        self::CLASSIFY_SALE_ProjectListV30DataListInternalAdvertiserInfoClassify,
        self::CLASSIFY_SUPPLEMENT_ProjectListV30DataListInternalAdvertiserInfoClassify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListInternalAdvertiserInfoClassify', $value));
        }
        return (string) $value;
    }
}
