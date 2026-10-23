<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasSubmitExportBoostItemGroupDataV2Request implements \JsonSerializable
{
    /**
     * 客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 助推组ID。若为null，则导出全部助推组
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 助推组ID。若为null，则导出全部助推组
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 助推组ID。若为null，则导出全部助推组
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
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
