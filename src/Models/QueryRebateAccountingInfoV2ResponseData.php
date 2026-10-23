<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryRebateAccountingInfoV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataInfoListInner[]
     */
    protected ?array $infoList = null;

    /**
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataInfoListInner[]
     */
    public function getInfoList(): ?array
    {
        return $this->infoList;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataInfoListInner[] $infoList
     * @return self
     */
    public function setInfoList(?array $infoList): self
    {
        $this->infoList = $infoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->infoList !== null) {
            $result['info_list'] = $this->infoList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['info_list'] ?? null) !== null && is_array($v)) {
            $obj->infoList = array_map(fn ($vv) => \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QueryRebateAccountingInfoV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
