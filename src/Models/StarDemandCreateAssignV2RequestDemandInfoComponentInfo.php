<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestDemandInfoComponentInfo implements \JsonSerializable
{
    /**
     * 共创组件引流抖音号
     * @var string
     */
    protected ?string $cocreateDouyinId = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoCommentComponentInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoCommentComponentInfo $commentComponentInfo = null;

    /**
     * @var int[]
     */
    protected ?array $commonComponentIds = null;

    /**
     * 购物车组件信息，最多不超过7个
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoEcomCartInner[]
     */
    protected ?array $ecomCart = null;

    /**
     * 行业组件ID
     * @var int
     */
    protected ?int $industryComponentId = null;

    /**
     * Link组件ID（落地页组件） 目前只支持1个
     * @var int[]
     */
    protected ?array $linkComponentIds = null;

    /**
     * 直播引流组件ID
     * @var int
     */
    protected ?int $liveAttractComponentId = null;

    /**
     * 挂载搜索词
     * @var string
     */
    protected ?string $searchWord = null;

    /**
     * 共创组件引流抖音号
     * @return string
     */
    public function getCocreateDouyinId(): ?string
    {
        return $this->cocreateDouyinId;
    }

    /**
     * 共创组件引流抖音号
     * @param string $cocreateDouyinId
     * @return self
     */
    public function setCocreateDouyinId(?string $cocreateDouyinId): self
    {
        $this->cocreateDouyinId = $cocreateDouyinId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoCommentComponentInfo
     */
    public function getCommentComponentInfo(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoCommentComponentInfo
    {
        return $this->commentComponentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoCommentComponentInfo $commentComponentInfo
     * @return self
     */
    public function setCommentComponentInfo(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoCommentComponentInfo $commentComponentInfo): self
    {
        $this->commentComponentInfo = $commentComponentInfo;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCommonComponentIds(): ?array
    {
        return $this->commonComponentIds;
    }

    /**
     * @param int[] $commonComponentIds
     * @return self
     */
    public function setCommonComponentIds(?array $commonComponentIds): self
    {
        $this->commonComponentIds = $commonComponentIds;
        return $this;
    }

    /**
     * 购物车组件信息，最多不超过7个
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoEcomCartInner[]
     */
    public function getEcomCart(): ?array
    {
        return $this->ecomCart;
    }

    /**
     * 购物车组件信息，最多不超过7个
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoEcomCartInner[] $ecomCart
     * @return self
     */
    public function setEcomCart(?array $ecomCart): self
    {
        $this->ecomCart = $ecomCart;
        return $this;
    }

    /**
     * 行业组件ID
     * @return int
     */
    public function getIndustryComponentId(): ?int
    {
        return $this->industryComponentId;
    }

    /**
     * 行业组件ID
     * @param int $industryComponentId
     * @return self
     */
    public function setIndustryComponentId(?int $industryComponentId): self
    {
        $this->industryComponentId = $industryComponentId;
        return $this;
    }

    /**
     * Link组件ID（落地页组件） 目前只支持1个
     * @return int[]
     */
    public function getLinkComponentIds(): ?array
    {
        return $this->linkComponentIds;
    }

    /**
     * Link组件ID（落地页组件） 目前只支持1个
     * @param int[] $linkComponentIds
     * @return self
     */
    public function setLinkComponentIds(?array $linkComponentIds): self
    {
        $this->linkComponentIds = $linkComponentIds;
        return $this;
    }

    /**
     * 直播引流组件ID
     * @return int
     */
    public function getLiveAttractComponentId(): ?int
    {
        return $this->liveAttractComponentId;
    }

    /**
     * 直播引流组件ID
     * @param int $liveAttractComponentId
     * @return self
     */
    public function setLiveAttractComponentId(?int $liveAttractComponentId): self
    {
        $this->liveAttractComponentId = $liveAttractComponentId;
        return $this;
    }

    /**
     * 挂载搜索词
     * @return string
     */
    public function getSearchWord(): ?string
    {
        return $this->searchWord;
    }

    /**
     * 挂载搜索词
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
        if ($this->commentComponentInfo !== null) {
            $result['comment_component_info'] = $this->commentComponentInfo;
        }
        if ($this->commonComponentIds !== null) {
            $result['common_component_ids'] = $this->commonComponentIds;
        }
        if ($this->ecomCart !== null) {
            $result['ecom_cart'] = $this->ecomCart;
        }
        if ($this->industryComponentId !== null) {
            $result['industry_component_id'] = $this->industryComponentId;
        }
        if ($this->linkComponentIds !== null) {
            $result['link_component_ids'] = $this->linkComponentIds;
        }
        if ($this->liveAttractComponentId !== null) {
            $result['live_attract_component_id'] = $this->liveAttractComponentId;
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
        if (($v = $data['comment_component_info'] ?? null) !== null && is_array($v)) {
            $obj->commentComponentInfo = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoCommentComponentInfo::fromArray($v);
        }
        if (($v = $data['common_component_ids'] ?? null) !== null && is_array($v)) {
            $obj->commonComponentIds = $v;
        }
        if (($v = $data['ecom_cart'] ?? null) !== null && is_array($v)) {
            $obj->ecomCart = array_map(fn ($vv) => \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfoEcomCartInner::fromArray($vv), $v);
        }
        if (($v = $data['industry_component_id'] ?? null) !== null) {
            $obj->industryComponentId = (int) $v;
        }
        if (($v = $data['link_component_ids'] ?? null) !== null && is_array($v)) {
            $obj->linkComponentIds = $v;
        }
        if (($v = $data['live_attract_component_id'] ?? null) !== null) {
            $obj->liveAttractComponentId = (int) $v;
        }
        if (($v = $data['search_word'] ?? null) !== null) {
            $obj->searchWord = (string) $v;
        }
        return $obj;
    }
}
