<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestDemandInfoComponentInfo implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $commonComponentIds = null;

    /**
     * 购物车组件信息，最多7个
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoEcomCartInner[]
     */
    protected ?array $ecomCart = null;

    /**
     * 行业组件ID 行业组件不可与Link（常规）组件同时使用，目前仅支持游戏/电商/网服类型 考核指标为组件点击数、激活总数、安装完成数量和APP唤起时必填
     * @var int
     */
    protected ?int $industryComponentId = null;

    /**
     * Link组件ID（落地页组件） 目前只支持1个，仅支持落地页类型
     * @var int[]
     */
    protected ?array $linkComponentIds = null;

    /**
     * 直播引流组件ID
     * @var int
     */
    protected ?int $liveAttractComponentId = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent $paidContentComponent = null;

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
     * 购物车组件信息，最多7个
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoEcomCartInner[]
     */
    public function getEcomCart(): ?array
    {
        return $this->ecomCart;
    }

    /**
     * 购物车组件信息，最多7个
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoEcomCartInner[] $ecomCart
     * @return self
     */
    public function setEcomCart(?array $ecomCart): self
    {
        $this->ecomCart = $ecomCart;
        return $this;
    }

    /**
     * 行业组件ID 行业组件不可与Link（常规）组件同时使用，目前仅支持游戏/电商/网服类型 考核指标为组件点击数、激活总数、安装完成数量和APP唤起时必填
     * @return int
     */
    public function getIndustryComponentId(): ?int
    {
        return $this->industryComponentId;
    }

    /**
     * 行业组件ID 行业组件不可与Link（常规）组件同时使用，目前仅支持游戏/电商/网服类型 考核指标为组件点击数、激活总数、安装完成数量和APP唤起时必填
     * @param int $industryComponentId
     * @return self
     */
    public function setIndustryComponentId(?int $industryComponentId): self
    {
        $this->industryComponentId = $industryComponentId;
        return $this;
    }

    /**
     * Link组件ID（落地页组件） 目前只支持1个，仅支持落地页类型
     * @return int[]
     */
    public function getLinkComponentIds(): ?array
    {
        return $this->linkComponentIds;
    }

    /**
     * Link组件ID（落地页组件） 目前只支持1个，仅支持落地页类型
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
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent
     */
    public function getPaidContentComponent(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent
    {
        return $this->paidContentComponent;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent $paidContentComponent
     * @return self
     */
    public function setPaidContentComponent(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent $paidContentComponent): self
    {
        $this->paidContentComponent = $paidContentComponent;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
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
        if ($this->paidContentComponent !== null) {
            $result['paid_content_component'] = $this->paidContentComponent;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['common_component_ids'] ?? null) !== null && is_array($v)) {
            $obj->commonComponentIds = $v;
        }
        if (($v = $data['ecom_cart'] ?? null) !== null && is_array($v)) {
            $obj->ecomCart = array_map(fn ($vv) => \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoEcomCartInner::fromArray($vv), $v);
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
        if (($v = $data['paid_content_component'] ?? null) !== null && is_array($v)) {
            $obj->paidContentComponent = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent::fromArray($v);
        }
        return $obj;
    }
}
