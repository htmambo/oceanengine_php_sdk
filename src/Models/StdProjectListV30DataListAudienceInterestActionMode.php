<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceInterestActionMode
{
    public const CUSTOM_StdProjectListV30DataListAudienceInterestActionMode = 'CUSTOM';
    public const RECOMMEND_StdProjectListV30DataListAudienceInterestActionMode = 'RECOMMEND';
    public const UNLIMITED_StdProjectListV30DataListAudienceInterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectListV30DataListAudienceInterestActionMode,
        self::RECOMMEND_StdProjectListV30DataListAudienceInterestActionMode,
        self::UNLIMITED_StdProjectListV30DataListAudienceInterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceInterestActionMode', $value));
        }
        return (string) $value;
    }
}
