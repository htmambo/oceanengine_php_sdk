<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeInfoOrderNoGetV30ResponseDataResultInner implements \JsonSerializable
{
    /**
     * 充值金额，单位：元
     * @var string
     */
    protected ?string $chargeAmount = null;

    /**
     * 充值时间，格式：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $chargeFinishTime = null;

    /**
     * 充值编号
     * @var string
     */
    protected ?string $chargeSerial = null;

    /**
     * 充值账户
     * @var int
     */
    protected ?int $chargeTargetId = null;

    /**
     * 支付方式
     * @var string
     */
    protected ?string $fundsPaymentChannelName = null;

    /**
     * 资金编号
     * @var string
     */
    protected ?string $fundsSerial = null;

    /**
     * 充值平台
     * @var string
     */
    protected ?string $platformName = null;

    /**
     * 充值金额，单位：元
     * @return string
     */
    public function getChargeAmount(): ?string
    {
        return $this->chargeAmount;
    }

    /**
     * 充值金额，单位：元
     * @param string $chargeAmount
     * @return self
     */
    public function setChargeAmount(?string $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * 充值时间，格式：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getChargeFinishTime(): ?string
    {
        return $this->chargeFinishTime;
    }

    /**
     * 充值时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $chargeFinishTime
     * @return self
     */
    public function setChargeFinishTime(?string $chargeFinishTime): self
    {
        $this->chargeFinishTime = $chargeFinishTime;
        return $this;
    }

    /**
     * 充值编号
     * @return string
     */
    public function getChargeSerial(): ?string
    {
        return $this->chargeSerial;
    }

    /**
     * 充值编号
     * @param string $chargeSerial
     * @return self
     */
    public function setChargeSerial(?string $chargeSerial): self
    {
        $this->chargeSerial = $chargeSerial;
        return $this;
    }

    /**
     * 充值账户
     * @return int
     */
    public function getChargeTargetId(): ?int
    {
        return $this->chargeTargetId;
    }

    /**
     * 充值账户
     * @param int $chargeTargetId
     * @return self
     */
    public function setChargeTargetId(?int $chargeTargetId): self
    {
        $this->chargeTargetId = $chargeTargetId;
        return $this;
    }

    /**
     * 支付方式
     * @return string
     */
    public function getFundsPaymentChannelName(): ?string
    {
        return $this->fundsPaymentChannelName;
    }

    /**
     * 支付方式
     * @param string $fundsPaymentChannelName
     * @return self
     */
    public function setFundsPaymentChannelName(?string $fundsPaymentChannelName): self
    {
        $this->fundsPaymentChannelName = $fundsPaymentChannelName;
        return $this;
    }

    /**
     * 资金编号
     * @return string
     */
    public function getFundsSerial(): ?string
    {
        return $this->fundsSerial;
    }

    /**
     * 资金编号
     * @param string $fundsSerial
     * @return self
     */
    public function setFundsSerial(?string $fundsSerial): self
    {
        $this->fundsSerial = $fundsSerial;
        return $this;
    }

    /**
     * 充值平台
     * @return string
     */
    public function getPlatformName(): ?string
    {
        return $this->platformName;
    }

    /**
     * 充值平台
     * @param string $platformName
     * @return self
     */
    public function setPlatformName(?string $platformName): self
    {
        $this->platformName = $platformName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeAmount !== null) {
            $result['charge_amount'] = $this->chargeAmount;
        }
        if ($this->chargeFinishTime !== null) {
            $result['charge_finish_time'] = $this->chargeFinishTime;
        }
        if ($this->chargeSerial !== null) {
            $result['charge_serial'] = $this->chargeSerial;
        }
        if ($this->chargeTargetId !== null) {
            $result['charge_target_id'] = $this->chargeTargetId;
        }
        if ($this->fundsPaymentChannelName !== null) {
            $result['funds_payment_channel_name'] = $this->fundsPaymentChannelName;
        }
        if ($this->fundsSerial !== null) {
            $result['funds_serial'] = $this->fundsSerial;
        }
        if ($this->platformName !== null) {
            $result['platform_name'] = $this->platformName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (string) $v;
        }
        if (($v = $data['charge_finish_time'] ?? null) !== null) {
            $obj->chargeFinishTime = (string) $v;
        }
        if (($v = $data['charge_serial'] ?? null) !== null) {
            $obj->chargeSerial = (string) $v;
        }
        if (($v = $data['charge_target_id'] ?? null) !== null) {
            $obj->chargeTargetId = (int) $v;
        }
        if (($v = $data['funds_payment_channel_name'] ?? null) !== null) {
            $obj->fundsPaymentChannelName = (string) $v;
        }
        if (($v = $data['funds_serial'] ?? null) !== null) {
            $obj->fundsSerial = (string) $v;
        }
        if (($v = $data['platform_name'] ?? null) !== null) {
            $obj->platformName = (string) $v;
        }
        return $obj;
    }
}
