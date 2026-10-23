<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30ResponseDataOrderListInnerAdListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListAdStatus
     */
    protected ?string $adStatus = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience
     */
    protected ?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience $audience = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListBidMode
     */
    protected ?string $bidMode = null;

    /**
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var int
     */
    protected ?int $cpaBid = null;

    /**
     * @var float
     */
    protected ?float $deliveryTime = null;

    /**
     * @var int
     */
    protected ?int $externalAction = null;

    /**
     * @var string
     */
    protected ?string $externalActionText = null;

    /**
     * @var bool
     */
    protected ?bool $isFans = null;

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
     * @return \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListAdStatus
     */
    public function getAdStatus(): ?string
    {
        return $this->adStatus;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListAdStatus $adStatus
     * @return self
     */
    public function setAdStatus(?string $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience
     */
    public function getAudience(): ?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListBidMode
     */
    public function getBidMode(): ?string
    {
        return $this->bidMode;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListBidMode $bidMode
     * @return self
     */
    public function setBidMode(?string $bidMode): self
    {
        $this->bidMode = $bidMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return int
     */
    public function getCpaBid(): ?int
    {
        return $this->cpaBid;
    }

    /**
     * @param int $cpaBid
     * @return self
     */
    public function setCpaBid(?int $cpaBid): self
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
     * @return int
     */
    public function getExternalAction(): ?int
    {
        return $this->externalAction;
    }

    /**
     * @param int $externalAction
     * @return self
     */
    public function setExternalAction(?int $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalActionText(): ?string
    {
        return $this->externalActionText;
    }

    /**
     * @param string $externalActionText
     * @return self
     */
    public function setExternalActionText(?string $externalActionText): self
    {
        $this->externalActionText = $externalActionText;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFans(): ?bool
    {
        return $this->isFans;
    }

    /**
     * @param bool $isFans
     * @return self
     */
    public function setIsFans(?bool $isFans): self
    {
        $this->isFans = $isFans;
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
        if ($this->adStatus !== null) {
            $result['ad_status'] = $this->adStatus;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->bidMode !== null) {
            $result['bid_mode'] = $this->bidMode;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
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
        if ($this->externalActionText !== null) {
            $result['external_action_text'] = $this->externalActionText;
        }
        if ($this->isFans !== null) {
            $result['is_fans'] = $this->isFans;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_status'] ?? null) !== null) {
            $obj->adStatus = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience::fromArray($v);
        }
        if (($v = $data['bid_mode'] ?? null) !== null) {
            $obj->bidMode = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (int) $v;
        }
        if (($v = $data['delivery_time'] ?? null) !== null) {
            $obj->deliveryTime = (float) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (int) $v;
        }
        if (($v = $data['external_action_text'] ?? null) !== null) {
            $obj->externalActionText = (string) $v;
        }
        if (($v = $data['is_fans'] ?? null) !== null) {
            $obj->isFans = (bool) $v;
        }
        return $obj;
    }
}
