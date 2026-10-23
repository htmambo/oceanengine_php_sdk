<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderUploadCpsTaskSalesV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2RequestSalesInner[]
     */
    protected ?array $sales = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @var int
     */
    protected ?int $type = null;

    /**
     * @return \Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2RequestSalesInner[]
     */
    public function getSales(): ?array
    {
        return $this->sales;
    }

    /**
     * @param \Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2RequestSalesInner[] $sales
     * @return self
     */
    public function setSales(?array $sales): self
    {
        $this->sales = $sales;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
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
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->sales !== null) {
            $result['sales'] = $this->sales;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['sales'] ?? null) !== null && is_array($v)) {
            $obj->sales = array_map(fn ($vv) => \Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2RequestSalesInner::fromArray($vv), $v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        return $obj;
    }
}
