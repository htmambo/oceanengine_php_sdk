<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveListV30ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInner[]
     */
    protected ?array $deriveMaterials = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var int
     */
    protected ?int $originMaterialId = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30DataDataStatus
     */
    protected ?string $status = null;

    /**
     * @var int
     */
    protected ?int $statusCode = null;

    /**
     * @var string
     */
    protected ?string $statusMessage = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInner[]
     */
    public function getDeriveMaterials(): ?array
    {
        return $this->deriveMaterials;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInner[] $deriveMaterials
     * @return self
     */
    public function setDeriveMaterials(?array $deriveMaterials): self
    {
        $this->deriveMaterials = $deriveMaterials;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getOriginMaterialId(): ?int
    {
        return $this->originMaterialId;
    }

    /**
     * @param int $originMaterialId
     * @return self
     */
    public function setOriginMaterialId(?int $originMaterialId): self
    {
        $this->originMaterialId = $originMaterialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30DataDataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30DataDataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return self
     */
    public function setStatusCode(?int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage(): ?string
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return self
     */
    public function setStatusMessage(?string $statusMessage): self
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->deriveMaterials !== null) {
            $result['derive_materials'] = $this->deriveMaterials;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->originMaterialId !== null) {
            $result['origin_material_id'] = $this->originMaterialId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusCode !== null) {
            $result['status_code'] = $this->statusCode;
        }
        if ($this->statusMessage !== null) {
            $result['status_message'] = $this->statusMessage;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['derive_materials'] ?? null) !== null && is_array($v)) {
            $obj->deriveMaterials = array_map(fn ($vv) => \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['origin_material_id'] ?? null) !== null) {
            $obj->originMaterialId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['status_code'] ?? null) !== null) {
            $obj->statusCode = (int) $v;
        }
        if (($v = $data['status_message'] ?? null) !== null) {
            $obj->statusMessage = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
