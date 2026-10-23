<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryProjectV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryProjectV30ResponseDataProjectInfoListInner[]
     */
    protected ?array $projectInfoList = null;

    /**
     * 总量
     * @var int
     */
    protected ?int $total = null;

    /**
     * @return \Oceanengine\Models\QueryProjectV30ResponseDataProjectInfoListInner[]
     */
    public function getProjectInfoList(): ?array
    {
        return $this->projectInfoList;
    }

    /**
     * @param \Oceanengine\Models\QueryProjectV30ResponseDataProjectInfoListInner[] $projectInfoList
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
        if (($v = $data['project_info_list'] ?? null) !== null && is_array($v)) {
            $obj->projectInfoList = array_map(fn ($vv) => \Oceanengine\Models\QueryProjectV30ResponseDataProjectInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
