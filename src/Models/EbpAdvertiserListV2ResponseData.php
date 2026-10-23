<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAdvertiserListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EbpAdvertiserListV2ResponseDataAccountListInner[]
     */
    protected ?array $accountList = null;

    /**
     * @var \Oceanengine\Models\EbpAdvertiserListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\EbpAdvertiserListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\EbpAdvertiserListV2ResponseDataAccountListInner[]
     */
    public function getAccountList(): ?array
    {
        return $this->accountList;
    }

    /**
     * @param \Oceanengine\Models\EbpAdvertiserListV2ResponseDataAccountListInner[] $accountList
     * @return self
     */
    public function setAccountList(?array $accountList): self
    {
        $this->accountList = $accountList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpAdvertiserListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\EbpAdvertiserListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\EbpAdvertiserListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\EbpAdvertiserListV2ResponseDataPageInfo $pageInfo): self
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
            $obj->accountList = array_map(fn ($vv) => \Oceanengine\Models\EbpAdvertiserListV2ResponseDataAccountListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\EbpAdvertiserListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
