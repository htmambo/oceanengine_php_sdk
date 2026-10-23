<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderCreateV10RequestDeliverySetting implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingBidMode
     */
    protected ?string $bidMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingBidType
     */
    protected ?string $bidType = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var float
     */
    protected ?float $deliveryTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode
     */
    protected ?string $liveroomHeatMode = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingBidMode
     */
    public function getBidMode(): ?string
    {
        return $this->bidMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingBidMode $bidMode
     * @return self
     */
    public function setBidMode(?string $bidMode): self
    {
        $this->bidMode = $bidMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryTime(): ?float
    {
        return $this->deliveryTime;
    }

    /**
     * @param float $deliveryTime
     * @return self
     */
    public function setDeliveryTime(?float $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode
     */
    public function getLiveroomHeatMode(): ?string
    {
        return $this->liveroomHeatMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode $liveroomHeatMode
     * @return self
     */
    public function setLiveroomHeatMode(?string $liveroomHeatMode): self
    {
        $this->liveroomHeatMode = $liveroomHeatMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->bidMode !== null) {
            $result['bid_mode'] = $this->bidMode;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
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
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['bid_mode'] ?? null) !== null) {
            $obj->bidMode = (string) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['delivery_time'] ?? null) !== null) {
            $obj->deliveryTime = (float) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['liveroom_heat_mode'] ?? null) !== null) {
            $obj->liveroomHeatMode = (string) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        return $obj;
    }
}
