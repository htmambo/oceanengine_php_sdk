<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DcdChargeSubmitV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 充值金额，单位为分（即实际金额*100）
     * @var int
     */
    protected ?int $chargeAmount = null;

    /**
     * 充值请求唯一编号
     * @var string
     */
    protected ?string $chargeRequestId = null;

    /**
     * @var \Oceanengine\Models\DcdChargeSubmitV30RequestPayInfo
     */
    protected ?\Oceanengine\Models\DcdChargeSubmitV30RequestPayInfo $payInfo = null;

    /**
     * @var \Oceanengine\Models\DcdChargeSubmitV30Platform
     */
    protected ?string $platform = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 充值金额，单位为分（即实际金额*100）
     * @return int
     */
    public function getChargeAmount(): ?int
    {
        return $this->chargeAmount;
    }

    /**
     * 充值金额，单位为分（即实际金额*100）
     * @param int $chargeAmount
     * @return self
     */
    public function setChargeAmount(?int $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * 充值请求唯一编号
     * @return string
     */
    public function getChargeRequestId(): ?string
    {
        return $this->chargeRequestId;
    }

    /**
     * 充值请求唯一编号
     * @param string $chargeRequestId
     * @return self
     */
    public function setChargeRequestId(?string $chargeRequestId): self
    {
        $this->chargeRequestId = $chargeRequestId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DcdChargeSubmitV30RequestPayInfo
     */
    public function getPayInfo(): ?\Oceanengine\Models\DcdChargeSubmitV30RequestPayInfo
    {
        return $this->payInfo;
    }

    /**
     * @param \Oceanengine\Models\DcdChargeSubmitV30RequestPayInfo $payInfo
     * @return self
     */
    public function setPayInfo(?\Oceanengine\Models\DcdChargeSubmitV30RequestPayInfo $payInfo): self
    {
        $this->payInfo = $payInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DcdChargeSubmitV30Platform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\DcdChargeSubmitV30Platform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->chargeAmount !== null) {
            $result['charge_amount'] = $this->chargeAmount;
        }
        if ($this->chargeRequestId !== null) {
            $result['charge_request_id'] = $this->chargeRequestId;
        }
        if ($this->payInfo !== null) {
            $result['pay_info'] = $this->payInfo;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (int) $v;
        }
        if (($v = $data['charge_request_id'] ?? null) !== null) {
            $obj->chargeRequestId = (string) $v;
        }
        if (($v = $data['pay_info'] ?? null) !== null && is_array($v)) {
            $obj->payInfo = \Oceanengine\Models\DcdChargeSubmitV30RequestPayInfo::fromArray($v);
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        return $obj;
    }
}
