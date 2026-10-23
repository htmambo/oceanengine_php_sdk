<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskCreateV10Request implements \JsonSerializable
{
    /**
     * 调控的目标全域控计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 千川广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10RequestAudience
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10RequestAudience $audience = null;

    /**
     * 直播全域-素材追投-控成本追投-直播间成交的转化出价，出价不能大于预算
     * @var float
     */
    protected ?float $bid = null;

    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10DeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * 调控时长，0.5h～24.0h，步进0.5h，注意：调控类型为SMART_BOOST时必填
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10ExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 素材列表，需要追投的素材ids 注意：最多支持20个素材
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10MaterialType
     */
    protected ?string $materialType = null;

    /**
     * 任务名称，1-50个字
     * @var string
     */
    protected ?string $name = null;

    /**
     * 直播全域-素材追投-控成本追投-支付ROI目标，单位元，最多支持两位小数
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * 直播全域-素材追投-直播间画面素材id
     * @var int
     */
    protected ?int $roomMaterialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10Scene
     */
    protected ?string $scene = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10SmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * 调控的目标全域控计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 调控的目标全域控计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 千川广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 千川广告主账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * 直播全域-素材追投-控成本追投-直播间成交的转化出价，出价不能大于预算
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * 直播全域-素材追投-控成本追投-直播间成交的转化出价，出价不能大于预算
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10DeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10DeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * 调控时长，0.5h～24.0h，步进0.5h，注意：调控类型为SMART_BOOST时必填
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 调控时长，0.5h～24.0h，步进0.5h，注意：调控类型为SMART_BOOST时必填
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10ExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10ExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 素材列表，需要追投的素材ids 注意：最多支持20个素材
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材列表，需要追投的素材ids 注意：最多支持20个素材
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10MaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10MaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * 任务名称，1-50个字
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 任务名称，1-50个字
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 直播全域-素材追投-控成本追投-支付ROI目标，单位元，最多支持两位小数
     * @return float
     */
    public function getRoi2Goal(): ?float
    {
        return $this->roi2Goal;
    }

    /**
     * 直播全域-素材追投-控成本追投-支付ROI目标，单位元，最多支持两位小数
     * @param float $roi2Goal
     * @return self
     */
    public function setRoi2Goal(?float $roi2Goal): self
    {
        $this->roi2Goal = $roi2Goal;
        return $this;
    }

    /**
     * 直播全域-素材追投-直播间画面素材id
     * @return int
     */
    public function getRoomMaterialId(): ?int
    {
        return $this->roomMaterialId;
    }

    /**
     * 直播全域-素材追投-直播间画面素材id
     * @param int $roomMaterialId
     * @return self
     */
    public function setRoomMaterialId(?int $roomMaterialId): self
    {
        $this->roomMaterialId = $roomMaterialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10Scene
     */
    public function getScene(): ?string
    {
        return $this->scene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10Scene $scene
     * @return self
     */
    public function setScene(?string $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10SmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10SmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->roi2Goal !== null) {
            $result['roi2_goal'] = $this->roi2Goal;
        }
        if ($this->roomMaterialId !== null) {
            $result['room_material_id'] = $this->roomMaterialId;
        }
        if ($this->scene !== null) {
            $result['scene'] = $this->scene;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10RequestAudience::fromArray($v);
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['roi2_goal'] ?? null) !== null) {
            $obj->roi2Goal = (float) $v;
        }
        if (($v = $data['room_material_id'] ?? null) !== null) {
            $obj->roomMaterialId = (int) $v;
        }
        if (($v = $data['scene'] ?? null) !== null) {
            $obj->scene = (string) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        return $obj;
    }
}
