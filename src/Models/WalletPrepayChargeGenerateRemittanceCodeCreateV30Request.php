<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class WalletPrepayChargeGenerateRemittanceCodeCreateV30Request implements \JsonSerializable
{
    /**
     * 组织ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Caller
     */
    protected ?string $caller = null;

    /**
     * 充值金额
     * @var int
     */
    protected ?int $chargeAmount = null;

    /**
     * 充值对象ID
     * @var int
     */
    protected ?int $chargeTargetId = null;

    /**
     * @var \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType
     */
    protected ?string $chargeTargetType = null;

    /**
     * @var \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @var \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Platform
     */
    protected ?string $platform = null;

    /**
     * 唯一请求ID
     * @var string
     */
    protected ?string $requestId = null;

    /**
     * 组织ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 组织ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Caller
     */
    public function getCaller(): ?string
    {
        return $this->caller;
    }

    /**
     * @param \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Caller $caller
     * @return self
     */
    public function setCaller(?string $caller): self
    {
        $this->caller = $caller;
        return $this;
    }

    /**
     * 充值金额
     * @return int
     */
    public function getChargeAmount(): ?int
    {
        return $this->chargeAmount;
    }

    /**
     * 充值金额
     * @param int $chargeAmount
     * @return self
     */
    public function setChargeAmount(?int $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * 充值对象ID
     * @return int
     */
    public function getChargeTargetId(): ?int
    {
        return $this->chargeTargetId;
    }

    /**
     * 充值对象ID
     * @param int $chargeTargetId
     * @return self
     */
    public function setChargeTargetId(?int $chargeTargetId): self
    {
        $this->chargeTargetId = $chargeTargetId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType
     */
    public function getChargeTargetType(): ?string
    {
        return $this->chargeTargetType;
    }

    /**
     * @param \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType $chargeTargetType
     * @return self
     */
    public function setChargeTargetType(?string $chargeTargetType): self
    {
        $this->chargeTargetType = $chargeTargetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Platform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Platform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 唯一请求ID
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * 唯一请求ID
     * @param string $requestId
     * @return self
     */
    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->caller !== null) {
            $result['caller'] = $this->caller;
        }
        if ($this->chargeAmount !== null) {
            $result['charge_amount'] = $this->chargeAmount;
        }
        if ($this->chargeTargetId !== null) {
            $result['charge_target_id'] = $this->chargeTargetId;
        }
        if ($this->chargeTargetType !== null) {
            $result['charge_target_type'] = $this->chargeTargetType;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->requestId !== null) {
            $result['request_id'] = $this->requestId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['caller'] ?? null) !== null) {
            $obj->caller = (string) $v;
        }
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (int) $v;
        }
        if (($v = $data['charge_target_id'] ?? null) !== null) {
            $obj->chargeTargetId = (int) $v;
        }
        if (($v = $data['charge_target_type'] ?? null) !== null) {
            $obj->chargeTargetType = (string) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['request_id'] ?? null) !== null) {
            $obj->requestId = (string) $v;
        }
        return $obj;
    }
}
