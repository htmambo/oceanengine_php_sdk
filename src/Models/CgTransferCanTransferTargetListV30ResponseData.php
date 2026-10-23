<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCanTransferTargetListV30ResponseData implements \JsonSerializable
{
    /**
     * 可转账户列表
     * @var \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataCanTransferTargetListInner[]
     */
    protected ?array $canTransferTargetList = null;

    /**
     * @var \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 可转账户列表
     * @return \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataCanTransferTargetListInner[]
     */
    public function getCanTransferTargetList(): ?array
    {
        return $this->canTransferTargetList;
    }

    /**
     * 可转账户列表
     * @param \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataCanTransferTargetListInner[] $canTransferTargetList
     * @return self
     */
    public function setCanTransferTargetList(?array $canTransferTargetList): self
    {
        $this->canTransferTargetList = $canTransferTargetList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canTransferTargetList !== null) {
            $result['can_transfer_target_list'] = $this->canTransferTargetList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_transfer_target_list'] ?? null) !== null && is_array($v)) {
            $obj->canTransferTargetList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataCanTransferTargetListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\CgTransferCanTransferTargetListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
