<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryProjectV2ResponseData implements \JsonSerializable
{
    /**
     * 页码游标值
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * @var \Oceanengine\Models\QueryProjectV2ResponseDataProjectInfoListInner[]
     */
    protected ?array $projectInfoList = null;

    /**
     * 总量
     * @var int
     */
    protected ?int $total = null;

    /**
     * 页码游标值
     * @return int
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * 页码游标值
     * @param int $cursor
     * @return self
     */
    public function setCursor(?int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryProjectV2ResponseDataProjectInfoListInner[]
     */
    public function getProjectInfoList(): ?array
    {
        return $this->projectInfoList;
    }

    /**
     * @param \Oceanengine\Models\QueryProjectV2ResponseDataProjectInfoListInner[] $projectInfoList
     * @return self
     */
    public function setProjectInfoList(?array $projectInfoList): self
    {
        $this->projectInfoList = $projectInfoList;
        return $this;
    }

    /**
     * 总量
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 总量
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cursor !== null) {
            $result['cursor'] = $this->cursor;
        }
        if ($this->projectInfoList !== null) {
            $result['project_info_list'] = $this->projectInfoList;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cursor'] ?? null) !== null) {
            $obj->cursor = (int) $v;
        }
        if (($v = $data['project_info_list'] ?? null) !== null && is_array($v)) {
            $obj->projectInfoList = array_map(fn ($vv) => \Oceanengine\Models\QueryProjectV2ResponseDataProjectInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
