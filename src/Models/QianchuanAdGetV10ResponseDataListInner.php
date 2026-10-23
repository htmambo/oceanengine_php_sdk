<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $adCreateTime = null;

    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string
     */
    protected ?string $adModifyTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerAwemeInfoInner[]
     */
    protected ?array $awemeInfo = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListCampaignScene
     */
    protected ?string $campaignScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerDeliverySetting $deliverySetting = null;

    /**
     * 抢首屏ROI目标降低幅度
     * @var int
     */
    protected ?int $grabFirstScreenBidAdjustRate = null;

    /**
     * 抢首屏开关
     * @var bool
     */
    protected ?bool $grabFirstScreenSwitch = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListLabAdType
     */
    protected ?string $labAdType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListMarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerProductInfoInner[]
     */
    protected ?array $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListStatus
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getAdCreateTime(): ?string
    {
        return $this->adCreateTime;
    }

    /**
     * @param string $adCreateTime
     * @return self
     */
    public function setAdCreateTime(?string $adCreateTime): self
    {
        $this->adCreateTime = $adCreateTime;
        return $this;
    }

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
     * @return string
     */
    public function getAdModifyTime(): ?string
    {
        return $this->adModifyTime;
    }

    /**
     * @param string $adModifyTime
     * @return self
     */
    public function setAdModifyTime(?string $adModifyTime): self
    {
        $this->adModifyTime = $adModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerAwemeInfoInner[]
     */
    public function getAwemeInfo(): ?array
    {
        return $this->awemeInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerAwemeInfoInner[] $awemeInfo
     * @return self
     */
    public function setAwemeInfo(?array $awemeInfo): self
    {
        $this->awemeInfo = $awemeInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListCampaignScene
     */
    public function getCampaignScene(): ?string
    {
        return $this->campaignScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListCampaignScene $campaignScene
     * @return self
     */
    public function setCampaignScene(?string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * 抢首屏ROI目标降低幅度
     * @return int
     */
    public function getGrabFirstScreenBidAdjustRate(): ?int
    {
        return $this->grabFirstScreenBidAdjustRate;
    }

    /**
     * 抢首屏ROI目标降低幅度
     * @param int $grabFirstScreenBidAdjustRate
     * @return self
     */
    public function setGrabFirstScreenBidAdjustRate(?int $grabFirstScreenBidAdjustRate): self
    {
        $this->grabFirstScreenBidAdjustRate = $grabFirstScreenBidAdjustRate;
        return $this;
    }

    /**
     * 抢首屏开关
     * @return bool
     */
    public function getGrabFirstScreenSwitch(): ?bool
    {
        return $this->grabFirstScreenSwitch;
    }

    /**
     * 抢首屏开关
     * @param bool $grabFirstScreenSwitch
     * @return self
     */
    public function setGrabFirstScreenSwitch(?bool $grabFirstScreenSwitch): self
    {
        $this->grabFirstScreenSwitch = $grabFirstScreenSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListLabAdType
     */
    public function getLabAdType(): ?string
    {
        return $this->labAdType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListLabAdType $labAdType
     * @return self
     */
    public function setLabAdType(?string $labAdType): self
    {
        $this->labAdType = $labAdType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListMarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListMarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
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
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerProductInfoInner[]
     */
    public function getProductInfo(): ?array
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerProductInfoInner[] $productInfo
     * @return self
     */
    public function setProductInfo(?array $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adCreateTime !== null) {
            $result['ad_create_time'] = $this->adCreateTime;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adModifyTime !== null) {
            $result['ad_modify_time'] = $this->adModifyTime;
        }
        if ($this->awemeInfo !== null) {
            $result['aweme_info'] = $this->awemeInfo;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignScene !== null) {
            $result['campaign_scene'] = $this->campaignScene;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->grabFirstScreenBidAdjustRate !== null) {
            $result['grab_first_screen_bid_adjust_rate'] = $this->grabFirstScreenBidAdjustRate;
        }
        if ($this->grabFirstScreenSwitch !== null) {
            $result['grab_first_screen_switch'] = $this->grabFirstScreenSwitch;
        }
        if ($this->labAdType !== null) {
            $result['lab_ad_type'] = $this->labAdType;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->marketingScene !== null) {
            $result['marketing_scene'] = $this->marketingScene;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_create_time'] ?? null) !== null) {
            $obj->adCreateTime = (string) $v;
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_modify_time'] ?? null) !== null) {
            $obj->adModifyTime = (string) $v;
        }
        if (($v = $data['aweme_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerAwemeInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_scene'] ?? null) !== null) {
            $obj->campaignScene = (string) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerDeliverySetting::fromArray($v);
        }
        if (($v = $data['grab_first_screen_bid_adjust_rate'] ?? null) !== null) {
            $obj->grabFirstScreenBidAdjustRate = (int) $v;
        }
        if (($v = $data['grab_first_screen_switch'] ?? null) !== null) {
            $obj->grabFirstScreenSwitch = (bool) $v;
        }
        if (($v = $data['lab_ad_type'] ?? null) !== null) {
            $obj->labAdType = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['marketing_scene'] ?? null) !== null) {
            $obj->marketingScene = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdGetV10ResponseDataListInnerProductInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
