<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderCreateV30Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $awemeSecUid = null;

    /**
     * 手动出价金额，10～1,000,000之间的10的倍数，不高于投放金额，单位：人民币（分） 注意：仅出价方式为“手动出价”时，必填
     * @var int
     */
    protected ?int $bidPrice = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderCreateV30BidType
     */
    protected ?string $bidType = null;

    /**
     * 投放预算 注意：数值需为10,000-500,000,000之间的10的倍数， 单位：人民币（分）
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 投放时长： 当marketing_goal= VIDEO_PROM_GOODS时，支持2、6、12、24或12的倍数，最大720小时 当marketing_goal= LIVE_PROM_GOODS &liveroom_heat_mode= BY_VIDEO 时，支持0.5、1、1.5、2、2.5、3、3.5、4、4.5、5、5.5、6、12、24 注：视频投放最短2小时
     * @var float
     */
    protected ?float $deliveryTime = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderCreateV30ExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 直播间加热方式，可选值: BY_ROOM: 直接加热直播间 BY_VIDEO: 选择视频加热直播间 注意：素材类型为LIVE_PROM_GOODS时，必填。可传多值。若传了BY_VIDEO，则必须有素材类型为VIDEO_PROM_GOODS 的object，同理，若传了BY_ROOM，则必须有素材类型为LIVE_PROM_GOODS 的object
     * @var \Oceanengine\Models\DouplusOrderCreateV30LiveroomHeatMode[]
     */
    protected ?array $liveroomHeatMode = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderCreateV30RequestObjectInfosInner[]
     */
    protected ?array $objectInfos = null;

    /**
     * RtaID
     * @var int
     */
    protected ?int $rtaId = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderCreateV30RequestTargeting
     */
    protected ?\Oceanengine\Models\DouplusOrderCreateV30RequestTargeting $targeting = null;

    /**
     * @return string
     */
    public function getAwemeSecUid(): ?string
    {
        return $this->awemeSecUid;
    }

    /**
     * @param string $awemeSecUid
     * @return self
     */
    public function setAwemeSecUid(?string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    /**
     * 手动出价金额，10～1,000,000之间的10的倍数，不高于投放金额，单位：人民币（分） 注意：仅出价方式为“手动出价”时，必填
     * @return int
     */
    public function getBidPrice(): ?int
    {
        return $this->bidPrice;
    }

    /**
     * 手动出价金额，10～1,000,000之间的10的倍数，不高于投放金额，单位：人民币（分） 注意：仅出价方式为“手动出价”时，必填
     * @param int $bidPrice
     * @return self
     */
    public function setBidPrice(?int $bidPrice): self
    {
        $this->bidPrice = $bidPrice;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderCreateV30BidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderCreateV30BidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * 投放预算 注意：数值需为10,000-500,000,000之间的10的倍数， 单位：人民币（分）
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 投放预算 注意：数值需为10,000-500,000,000之间的10的倍数， 单位：人民币（分）
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 投放时长： 当marketing_goal= VIDEO_PROM_GOODS时，支持2、6、12、24或12的倍数，最大720小时 当marketing_goal= LIVE_PROM_GOODS &liveroom_heat_mode= BY_VIDEO 时，支持0.5、1、1.5、2、2.5、3、3.5、4、4.5、5、5.5、6、12、24 注：视频投放最短2小时
     * @return float
     */
    public function getDeliveryTime(): ?float
    {
        return $this->deliveryTime;
    }

    /**
     * 投放时长： 当marketing_goal= VIDEO_PROM_GOODS时，支持2、6、12、24或12的倍数，最大720小时 当marketing_goal= LIVE_PROM_GOODS &liveroom_heat_mode= BY_VIDEO 时，支持0.5、1、1.5、2、2.5、3、3.5、4、4.5、5、5.5、6、12、24 注：视频投放最短2小时
     * @param float $deliveryTime
     * @return self
     */
    public function setDeliveryTime(?float $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderCreateV30ExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderCreateV30ExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 直播间加热方式，可选值: BY_ROOM: 直接加热直播间 BY_VIDEO: 选择视频加热直播间 注意：素材类型为LIVE_PROM_GOODS时，必填。可传多值。若传了BY_VIDEO，则必须有素材类型为VIDEO_PROM_GOODS 的object，同理，若传了BY_ROOM，则必须有素材类型为LIVE_PROM_GOODS 的object
     * @return \Oceanengine\Models\DouplusOrderCreateV30LiveroomHeatMode[]
     */
    public function getLiveroomHeatMode(): ?array
    {
        return $this->liveroomHeatMode;
    }

    /**
     * 直播间加热方式，可选值: BY_ROOM: 直接加热直播间 BY_VIDEO: 选择视频加热直播间 注意：素材类型为LIVE_PROM_GOODS时，必填。可传多值。若传了BY_VIDEO，则必须有素材类型为VIDEO_PROM_GOODS 的object，同理，若传了BY_ROOM，则必须有素材类型为LIVE_PROM_GOODS 的object
     * @param \Oceanengine\Models\DouplusOrderCreateV30LiveroomHeatMode[] $liveroomHeatMode
     * @return self
     */
    public function setLiveroomHeatMode(?array $liveroomHeatMode): self
    {
        $this->liveroomHeatMode = $liveroomHeatMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderCreateV30RequestObjectInfosInner[]
     */
    public function getObjectInfos(): ?array
    {
        return $this->objectInfos;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderCreateV30RequestObjectInfosInner[] $objectInfos
     * @return self
     */
    public function setObjectInfos(?array $objectInfos): self
    {
        $this->objectInfos = $objectInfos;
        return $this;
    }

    /**
     * RtaID
     * @return int
     */
    public function getRtaId(): ?int
    {
        return $this->rtaId;
    }

    /**
     * RtaID
     * @param int $rtaId
     * @return self
     */
    public function setRtaId(?int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderCreateV30RequestTargeting
     */
    public function getTargeting(): ?\Oceanengine\Models\DouplusOrderCreateV30RequestTargeting
    {
        return $this->targeting;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderCreateV30RequestTargeting $targeting
     * @return self
     */
    public function setTargeting(?\Oceanengine\Models\DouplusOrderCreateV30RequestTargeting $targeting): self
    {
        $this->targeting = $targeting;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeSecUid !== null) {
            $result['aweme_sec_uid'] = $this->awemeSecUid;
        }
        if ($this->bidPrice !== null) {
            $result['bid_price'] = $this->bidPrice;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->deliveryTime !== null) {
            $result['delivery_time'] = $this->deliveryTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->liveroomHeatMode !== null) {
            $result['liveroom_heat_mode'] = $this->liveroomHeatMode;
        }
        if ($this->objectInfos !== null) {
            $result['object_infos'] = $this->objectInfos;
        }
        if ($this->rtaId !== null) {
            $result['rta_id'] = $this->rtaId;
        }
        if ($this->targeting !== null) {
            $result['targeting'] = $this->targeting;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_sec_uid'] ?? null) !== null) {
            $obj->awemeSecUid = (string) $v;
        }
        if (($v = $data['bid_price'] ?? null) !== null) {
            $obj->bidPrice = (int) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['delivery_time'] ?? null) !== null) {
            $obj->deliveryTime = (float) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['liveroom_heat_mode'] ?? null) !== null && is_array($v)) {
            $obj->liveroomHeatMode = $v;
        }
        if (($v = $data['object_infos'] ?? null) !== null && is_array($v)) {
            $obj->objectInfos = array_map(fn ($vv) => \Oceanengine\Models\DouplusOrderCreateV30RequestObjectInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['rta_id'] ?? null) !== null) {
            $obj->rtaId = (int) $v;
        }
        if (($v = $data['targeting'] ?? null) !== null && is_array($v)) {
            $obj->targeting = \Oceanengine\Models\DouplusOrderCreateV30RequestTargeting::fromArray($v);
        }
        return $obj;
    }
}
