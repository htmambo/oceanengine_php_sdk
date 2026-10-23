<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsTaskRaiseOptimizationIdsGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseOptimizationIdsGetV2DataStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseOptimizationIdsGetV2DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseOptimizationIdsGetV2DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
