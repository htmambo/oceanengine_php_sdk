<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsOrangeSiteGetV30ResponseDataOptimizeGoal implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30DataOptimizeGoalDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30DataOptimizeGoalExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30DataOptimizeGoalDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30DataOptimizeGoalDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30DataOptimizeGoalExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30DataOptimizeGoalExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        return $obj;
    }
}
