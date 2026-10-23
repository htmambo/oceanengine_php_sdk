<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserAssignV2Role
{
    public const COLLABORATOR_AgentAdvertiserAssignV2Role = 'COLLABORATOR';
    public const OPTIMIZER_AgentAdvertiserAssignV2Role = 'OPTIMIZER';

    public const ALLOWED_VALUES = [
        self::COLLABORATOR_AgentAdvertiserAssignV2Role,
        self::OPTIMIZER_AgentAdvertiserAssignV2Role,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserAssignV2Role', $value));
        }
        return (string) $value;
    }
}
