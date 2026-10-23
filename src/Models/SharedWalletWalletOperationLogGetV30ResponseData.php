<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletOperationLogGetV30ResponseData implements \JsonSerializable
{
    /**
     * 分页数据
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 操作的目标
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * 分页数据
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 分页数据
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        return $obj;
    }
}
