<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletAdvOperationLogGetV30ResponseData implements \JsonSerializable
{
    /**
     * 分页查询列表
     * @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 操作的目标
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * 分页查询列表
     * @return \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 分页查询列表
     * @param \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 操作的目标
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 操作的目标
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        return $obj;
    }
}
