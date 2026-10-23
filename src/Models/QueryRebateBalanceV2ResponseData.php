<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryRebateBalanceV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QueryRebateBalanceV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2ResponseDataRebatesInner[]
     */
    protected ?array $rebates = null;

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QueryRebateBalanceV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QueryRebateBalanceV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2ResponseDataRebatesInner[]
     */
    public function getRebates(): ?array
    {
        return $this->rebates;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2ResponseDataRebatesInner[] $rebates
     * @return self
     */
    public function setRebates(?array $rebates): self
    {
        $this->rebates = $rebates;
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
        if ($this->rebates !== null) {
            $result['rebates'] = $this->rebates;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QueryRebateBalanceV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['rebates'] ?? null) !== null && is_array($v)) {
            $obj->rebates = array_map(fn ($vv) => \Oceanengine\Models\QueryRebateBalanceV2ResponseDataRebatesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
