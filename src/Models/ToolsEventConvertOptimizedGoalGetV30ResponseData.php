<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventConvertOptimizedGoalGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInner[]
     */
    protected ?array $goals = null;

    /**
     * @return \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInner[]
     */
    public function getGoals(): ?array
    {
        return $this->goals;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInner[] $goals
     * @return self
     */
    public function setGoals(?array $goals): self
    {
        $this->goals = $goals;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->goals !== null) {
            $result['goals'] = $this->goals;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['goals'] ?? null) !== null && is_array($v)) {
            $obj->goals = array_map(fn ($vv) => \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
