<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OpenMaterialAuditProSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * 任务执行ID
     * @var string
     */
    protected ?string $runId = null;

    /**
     * 任务执行ID
     * @return string
     */
    public function getRunId(): ?string
    {
        return $this->runId;
    }

    /**
     * 任务执行ID
     * @param string $runId
     * @return self
     */
    public function setRunId(?string $runId): self
    {
        $this->runId = $runId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->runId !== null) {
            $result['run_id'] = $this->runId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['run_id'] ?? null) !== null) {
            $obj->runId = (string) $v;
        }
        return $obj;
    }
}
