<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderQueryCpsTaskSalesV2ResponseData implements \JsonSerializable
{
    /**
     * hasmore
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * @var \Oceanengine\Models\StarDemanderQueryCpsTaskSalesV2ResponseDataSalesInner[]
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
     * hasmore
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * hasmore
     * @param bool $hasMore
     * @return self
     */
    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemanderQueryCpsTaskSalesV2ResponseDataSalesInner[]
     */
    public function getSales(): ?array
    {
        return $this->sales;
    }

    /**
     * @param \Oceanengine\Models\StarDemanderQueryCpsTaskSalesV2ResponseDataSalesInner[] $sales
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->hasMore !== null) {
            $result['has_more'] = $this->hasMore;
        }
        if ($this->sales !== null) {
            $result['sales'] = $this->sales;
        }
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
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (bool) $v;
        }
        if (($v = $data['sales'] ?? null) !== null && is_array($v)) {
            $obj->sales = array_map(fn ($vv) => \Oceanengine\Models\StarDemanderQueryCpsTaskSalesV2ResponseDataSalesInner::fromArray($vv), $v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
