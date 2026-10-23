<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetComponentV2ResponseDataOrderComponentListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $cocreateDouyinId = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerEcomInfoInner[]
     */
    protected ?array $ecomInfo = null;

    /**
     * @var int
     */
    protected ?int $industryComponentId = null;

    /**
     * 常规组件信息
     * @var \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerLinkComponentListInner[]
     */
    protected ?array $linkComponentList = null;

    /**
     * @var int
     */
    protected ?int $liveAttractComponentId = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var string
     */
    protected ?string $searchWord = null;

    /**
     * @return string
     */
    public function getCocreateDouyinId(): ?string
    {
        return $this->cocreateDouyinId;
    }

    /**
     * @param string $cocreateDouyinId
     * @return self
     */
    public function setCocreateDouyinId(?string $cocreateDouyinId): self
    {
        $this->cocreateDouyinId = $cocreateDouyinId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerEcomInfoInner[]
     */
    public function getEcomInfo(): ?array
    {
        return $this->ecomInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerEcomInfoInner[] $ecomInfo
     * @return self
     */
    public function setEcomInfo(?array $ecomInfo): self
    {
        $this->ecomInfo = $ecomInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndustryComponentId(): ?int
    {
        return $this->industryComponentId;
    }

    /**
     * @param int $industryComponentId
     * @return self
     */
    public function setIndustryComponentId(?int $industryComponentId): self
    {
        $this->industryComponentId = $industryComponentId;
        return $this;
    }

    /**
     * 常规组件信息
     * @return \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerLinkComponentListInner[]
     */
    public function getLinkComponentList(): ?array
    {
        return $this->linkComponentList;
    }

    /**
     * 常规组件信息
     * @param \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerLinkComponentListInner[] $linkComponentList
     * @return self
     */
    public function setLinkComponentList(?array $linkComponentList): self
    {
        $this->linkComponentList = $linkComponentList;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveAttractComponentId(): ?int
    {
        return $this->liveAttractComponentId;
    }

    /**
     * @param int $liveAttractComponentId
     * @return self
     */
    public function setLiveAttractComponentId(?int $liveAttractComponentId): self
    {
        $this->liveAttractComponentId = $liveAttractComponentId;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 任务ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchWord(): ?string
    {
        return $this->searchWord;
    }

    /**
     * @param string $searchWord
     * @return self
     */
    public function setSearchWord(?string $searchWord): self
    {
        $this->searchWord = $searchWord;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cocreateDouyinId !== null) {
            $result['cocreate_douyin_id'] = $this->cocreateDouyinId;
        }
        if ($this->ecomInfo !== null) {
            $result['ecom_info'] = $this->ecomInfo;
        }
        if ($this->industryComponentId !== null) {
            $result['industry_component_id'] = $this->industryComponentId;
        }
        if ($this->linkComponentList !== null) {
            $result['link_component_list'] = $this->linkComponentList;
        }
        if ($this->liveAttractComponentId !== null) {
            $result['live_attract_component_id'] = $this->liveAttractComponentId;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->searchWord !== null) {
            $result['search_word'] = $this->searchWord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cocreate_douyin_id'] ?? null) !== null) {
            $obj->cocreateDouyinId = (string) $v;
        }
        if (($v = $data['ecom_info'] ?? null) !== null && is_array($v)) {
            $obj->ecomInfo = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerEcomInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['industry_component_id'] ?? null) !== null) {
            $obj->industryComponentId = (int) $v;
        }
        if (($v = $data['link_component_list'] ?? null) !== null && is_array($v)) {
            $obj->linkComponentList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInnerLinkComponentListInner::fromArray($vv), $v);
        }
        if (($v = $data['live_attract_component_id'] ?? null) !== null) {
            $obj->liveAttractComponentId = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['search_word'] ?? null) !== null) {
            $obj->searchWord = (string) $v;
        }
        return $obj;
    }
}
