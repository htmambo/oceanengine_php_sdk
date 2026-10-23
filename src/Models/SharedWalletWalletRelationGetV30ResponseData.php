<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletRelationGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 共享钱包关系
     * @var \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * 共享钱包ID
     * @var int
     */
    protected ?int $sharedWalletId = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 共享钱包关系
     * @return \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 共享钱包关系
     * @param \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataResultsInner[] $results
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
        return $this;
    }

    /**
     * 共享钱包ID
     * @return int
     */
    public function getSharedWalletId(): ?int
    {
        return $this->sharedWalletId;
    }

    /**
     * 共享钱包ID
     * @param int $sharedWalletId
     * @return self
     */
    public function setSharedWalletId(?int $sharedWalletId): self
    {
        $this->sharedWalletId = $sharedWalletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->results !== null) {
            $result['results'] = $this->results;
        }
        if ($this->sharedWalletId !== null) {
            $result['shared_wallet_id'] = $this->sharedWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['results'] ?? null) !== null && is_array($v)) {
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletRelationGetV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        if (($v = $data['shared_wallet_id'] ?? null) !== null) {
            $obj->sharedWalletId = (int) $v;
        }
        return $obj;
    }
}
