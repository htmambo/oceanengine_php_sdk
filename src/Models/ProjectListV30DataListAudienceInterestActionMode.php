<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceInterestActionMode
{
    public const CUSTOM_ProjectListV30DataListAudienceInterestActionMode = 'CUSTOM';
    public const RECOMMEND_ProjectListV30DataListAudienceInterestActionMode = 'RECOMMEND';
    public const UNLIMITED_ProjectListV30DataListAudienceInterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectListV30DataListAudienceInterestActionMode,
        self::RECOMMEND_ProjectListV30DataListAudienceInterestActionMode,
        self::UNLIMITED_ProjectListV30DataListAudienceInterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceInterestActionMode', $value));
        }
        return (string) $value;
    }
}
