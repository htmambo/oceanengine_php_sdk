<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdDetailV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $adlabScene = null;

    /**
     * 抖音号id
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * 计划绑定的抖音号信息
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataAwemeInfosInner[]
     */
    protected ?array $awemeInfos = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting $creativeSetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProductInfosInner[]
     */
    protected ?array $productInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProgrammaticCreativeMediaList
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProgrammaticCreativeMediaList $programmaticCreativeMediaList = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataRoomInfoInner[]
     */
    protected ?array $roomInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataStatus
     */
    protected ?string $status = null;

    /**
     * 全店计划对应的shopId
     * @var int
     */
    protected ?int $uniPromShopId = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdlabScene(): ?int
    {
        return $this->adlabScene;
    }

    /**
     * @param int $adlabScene
     * @return self
     */
    public function setAdlabScene(?int $adlabScene): self
    {
        $this->adlabScene = $adlabScene;
        return $this;
    }

    /**
     * 抖音号id
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 计划绑定的抖音号信息
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataAwemeInfosInner[]
     */
    public function getAwemeInfos(): ?array
    {
        return $this->awemeInfos;
    }

    /**
     * 计划绑定的抖音号信息
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataAwemeInfosInner[] $awemeInfos
     * @return self
     */
    public function setAwemeInfos(?array $awemeInfos): self
    {
        $this->awemeInfos = $awemeInfos;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting
     */
    public function getCreativeSetting(): ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting
    {
        return $this->creativeSetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting $creativeSetting
     * @return self
     */
    public function setCreativeSetting(?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting $creativeSetting): self
    {
        $this->creativeSetting = $creativeSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInner[] $multiProductCreativeList
     * @return self
     */
    public function setMultiProductCreativeList(?array $multiProductCreativeList): self
    {
        $this->multiProductCreativeList = $multiProductCreativeList;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProductInfosInner[]
     */
    public function getProductInfos(): ?array
    {
        return $this->productInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProductInfosInner[] $productInfos
     * @return self
     */
    public function setProductInfos(?array $productInfos): self
    {
        $this->productInfos = $productInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProgrammaticCreativeMediaList
     */
    public function getProgrammaticCreativeMediaList(): ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProgrammaticCreativeMediaList
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProgrammaticCreativeMediaList $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProgrammaticCreativeMediaList $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataRoomInfoInner[]
     */
    public function getRoomInfo(): ?array
    {
        return $this->roomInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataRoomInfoInner[] $roomInfo
     * @return self
     */
    public function setRoomInfo(?array $roomInfo): self
    {
        $this->roomInfo = $roomInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 全店计划对应的shopId
     * @return int
     */
    public function getUniPromShopId(): ?int
    {
        return $this->uniPromShopId;
    }

    /**
     * 全店计划对应的shopId
     * @param int $uniPromShopId
     * @return self
     */
    public function setUniPromShopId(?int $uniPromShopId): self
    {
        $this->uniPromShopId = $uniPromShopId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adlabScene !== null) {
            $result['adlab_scene'] = $this->adlabScene;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeInfos !== null) {
            $result['aweme_infos'] = $this->awemeInfos;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->creativeSetting !== null) {
            $result['creative_setting'] = $this->creativeSetting;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->multiProductCreativeList !== null) {
            $result['multi_product_creative_list'] = $this->multiProductCreativeList;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->productInfos !== null) {
            $result['product_infos'] = $this->productInfos;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
        }
        if ($this->roomInfo !== null) {
            $result['room_info'] = $this->roomInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->uniPromShopId !== null) {
            $result['uni_prom_shop_id'] = $this->uniPromShopId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['adlab_scene'] ?? null) !== null) {
            $obj->adlabScene = (int) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['aweme_infos'] ?? null) !== null && is_array($v)) {
            $obj->awemeInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataAwemeInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['creative_setting'] ?? null) !== null && is_array($v)) {
            $obj->creativeSetting = \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['product_infos'] ?? null) !== null && is_array($v)) {
            $obj->productInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProductInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataProgrammaticCreativeMediaList::fromArray($v);
        }
        if (($v = $data['room_info'] ?? null) !== null && is_array($v)) {
            $obj->roomInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataRoomInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['uni_prom_shop_id'] ?? null) !== null) {
            $obj->uniPromShopId = (int) $v;
        }
        return $obj;
    }
}
