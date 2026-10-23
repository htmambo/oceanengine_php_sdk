<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterAccountOfflineListV30ResponseData implements \JsonSerializable
{
    /**
     * 工作台账户下管理业务账户明细
     * @var \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataAccountsInner[]
     */
    protected ?array $accounts = null;

    /**
     * @var \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 工作台账户下管理业务账户明细
     * @return \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataAccountsInner[]
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * 工作台账户下管理业务账户明细
     * @param \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataAccountsInner[] $accounts
     * @return self
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->accounts !== null) {
            $result['accounts'] = $this->accounts;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accounts'] ?? null) !== null && is_array($v)) {
            $obj->accounts = array_map(fn ($vv) => \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataAccountsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\CustomerCenterAccountOfflineListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
