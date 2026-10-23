<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OpenMaterialAuditProGetV30ResponseData implements \JsonSerializable
{
    /**
     * 任务状态码
     * @var string
     */
    protected ?string $code = null;

    /**
     * @var \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataInput
     */
    protected ?\Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataInput $input = null;

    /**
     * @var \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataOutput
     */
    protected ?\Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataOutput $output = null;

    /**
     * 任务执行ID
     * @var string
     */
    protected ?string $runId = null;

    /**
     * @var \Oceanengine\Models\OpenMaterialAuditProGetV30DataStatus
     */
    protected ?string $status = null;

    /**
     * 任务状态码
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 任务状态码
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataInput
     */
    public function getInput(): ?\Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataInput
    {
        return $this->input;
    }

    /**
     * @param \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataInput $input
     * @return self
     */
    public function setInput(?\Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataInput $input): self
    {
        $this->input = $input;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataOutput
     */
    public function getOutput(): ?\Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataOutput
    {
        return $this->output;
    }

    /**
     * @param \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataOutput $output
     * @return self
     */
    public function setOutput(?\Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataOutput $output): self
    {
        $this->output = $output;
        return $this;
    }

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
     * @return \Oceanengine\Models\OpenMaterialAuditProGetV30DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\OpenMaterialAuditProGetV30DataStatus $status
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
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->input !== null) {
            $result['input'] = $this->input;
        }
        if ($this->output !== null) {
            $result['output'] = $this->output;
        }
        if ($this->runId !== null) {
            $result['run_id'] = $this->runId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['input'] ?? null) !== null && is_array($v)) {
            $obj->input = \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataInput::fromArray($v);
        }
        if (($v = $data['output'] ?? null) !== null && is_array($v)) {
            $obj->output = \Oceanengine\Models\OpenMaterialAuditProGetV30ResponseDataOutput::fromArray($v);
        }
        if (($v = $data['run_id'] ?? null) !== null) {
            $obj->runId = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
