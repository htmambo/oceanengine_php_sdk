<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeEstimateProfitV10DeliverySetting implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingBidMode
     */
    protected ?string $bidMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingBidType
     */
    protected ?string $bidType = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 当ea为326时需要传
     * @var float
     */
    protected ?float $payRoi = null;

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
     * @return \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingBidMode
     */
    public function getBidMode(): ?string
    {
        return $this->bidMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingBidMode $bidMode
     * @return self
     */
    public function setBidMode(?string $bidMode): self
    {
        $this->bidMode = $bidMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingBidType $bidType
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
     * @return \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 当ea为326时需要传
     * @return float
     */
    public function getPayRoi(): ?float
    {
        return $this->payRoi;
    }

    /**
     * 当ea为326时需要传
     * @param float $payRoi
     * @return self
     */
    public function setPayRoi(?float $payRoi): self
    {
        $this->payRoi = $payRoi;
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
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->payRoi !== null) {
            $result['pay_roi'] = $this->payRoi;
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
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['pay_roi'] ?? null) !== null) {
            $obj->payRoi = (float) $v;
        }
        return $obj;
    }
}
