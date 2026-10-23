<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderListByCampaignV2ResponseData implements \JsonSerializable
{
    /**
     * 任务列表
     * @var \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataOrderListInner[]
     */
    protected ?array $orderList = null;

    /**
     * @var \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarOrderListByCampaignV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 任务列表
     * @return \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataOrderListInner[]
     */
    public function getOrderList(): ?array
    {
        return $this->orderList;
    }

    /**
     * 任务列表
     * @param \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataOrderListInner[] $orderList
     * @return self
     */
    public function setOrderList(?array $orderList): self
    {
        $this->orderList = $orderList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarOrderListByCampaignV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarOrderListByCampaignV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->orderList !== null) {
            $result['order_list'] = $this->orderList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_list'] ?? null) !== null && is_array($v)) {
            $obj->orderList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataOrderListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarOrderListByCampaignV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
