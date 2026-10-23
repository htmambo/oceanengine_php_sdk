<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserUnassignV2Role
{
    public const COLLABORATOR_AgentAdvertiserUnassignV2Role = 'COLLABORATOR';
    public const OPTIMIZER_AgentAdvertiserUnassignV2Role = 'OPTIMIZER';

    public const ALLOWED_VALUES = [
        self::COLLABORATOR_AgentAdvertiserUnassignV2Role,
        self::OPTIMIZER_AgentAdvertiserUnassignV2Role,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserUnassignV2Role', $value));
        }
        return (string) $value;
    }
}
