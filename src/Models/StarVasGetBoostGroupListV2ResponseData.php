<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupListV2ResponseData implements \JsonSerializable
{
    /**
     * 助推组列表
     * @var \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataBoostGroupInfosInner[]
     */
    protected ?array $boostGroupInfos = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataPagination
     */
    protected ?\Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataPagination $pagination = null;

    /**
     * 助推组列表
     * @return \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataBoostGroupInfosInner[]
     */
    public function getBoostGroupInfos(): ?array
    {
        return $this->boostGroupInfos;
    }

    /**
     * 助推组列表
     * @param \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataBoostGroupInfosInner[] $boostGroupInfos
     * @return self
     */
    public function setBoostGroupInfos(?array $boostGroupInfos): self
    {
        $this->boostGroupInfos = $boostGroupInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->boostGroupInfos !== null) {
            $result['boost_group_infos'] = $this->boostGroupInfos;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['boost_group_infos'] ?? null) !== null && is_array($v)) {
            $obj->boostGroupInfos = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataBoostGroupInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\StarVasGetBoostGroupListV2ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
