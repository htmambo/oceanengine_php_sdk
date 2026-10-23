<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BusinessPlatformCompanyAccountGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataAccountListInner[]
     */
    protected ?array $accountList = null;

    /**
     * @var \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataAccountListInner[]
     */
    public function getAccountList(): ?array
    {
        return $this->accountList;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataAccountListInner[] $accountList
     * @return self
     */
    public function setAccountList(?array $accountList): self
    {
        $this->accountList = $accountList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->accountList !== null) {
            $result['account_list'] = $this->accountList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_list'] ?? null) !== null && is_array($v)) {
            $obj->accountList = array_map(fn ($vv) => \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataAccountListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
