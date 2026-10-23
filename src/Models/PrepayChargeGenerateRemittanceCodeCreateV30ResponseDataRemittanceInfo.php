<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo implements \JsonSerializable
{
    /**
     * 收款银行账号
     * @var string
     */
    protected ?string $bankAccount = null;

    /**
     * 行联号
     * @var string
     */
    protected ?string $bankName = null;

    /**
     * 行联号
     * @var string
     */
    protected ?string $bankNumber = null;

    /**
     * 付款方名称
     * @var string
     */
    protected ?string $payerName = null;

    /**
     * 收款方名称
     * @var string
     */
    protected ?string $receiverAme = null;

    /**
     * 汇款码
     * @var string
     */
    protected ?string $remittanceCode = null;

    /**
     * 收款银行账号
     * @return string
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * 收款银行账号
     * @param string $bankAccount
     * @return self
     */
    public function setBankAccount(?string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * 行联号
     * @return string
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * 行联号
     * @param string $bankName
     * @return self
     */
    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * 行联号
     * @return string
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }

    /**
     * 行联号
     * @param string $bankNumber
     * @return self
     */
    public function setBankNumber(?string $bankNumber): self
    {
        $this->bankNumber = $bankNumber;
        return $this;
    }

    /**
     * 付款方名称
     * @return string
     */
    public function getPayerName(): ?string
    {
        return $this->payerName;
    }

    /**
     * 付款方名称
     * @param string $payerName
     * @return self
     */
    public function setPayerName(?string $payerName): self
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * 收款方名称
     * @return string
     */
    public function getReceiverAme(): ?string
    {
        return $this->receiverAme;
    }

    /**
     * 收款方名称
     * @param string $receiverAme
     * @return self
     */
    public function setReceiverAme(?string $receiverAme): self
    {
        $this->receiverAme = $receiverAme;
        return $this;
    }

    /**
     * 汇款码
     * @return string
     */
    public function getRemittanceCode(): ?string
    {
        return $this->remittanceCode;
    }

    /**
     * 汇款码
     * @param string $remittanceCode
     * @return self
     */
    public function setRemittanceCode(?string $remittanceCode): self
    {
        $this->remittanceCode = $remittanceCode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bankAccount !== null) {
            $result['bank_account'] = $this->bankAccount;
        }
        if ($this->bankName !== null) {
            $result['bank_name'] = $this->bankName;
        }
        if ($this->bankNumber !== null) {
            $result['bank_number'] = $this->bankNumber;
        }
        if ($this->payerName !== null) {
            $result['payer_name'] = $this->payerName;
        }
        if ($this->receiverAme !== null) {
            $result['receiver_ame'] = $this->receiverAme;
        }
        if ($this->remittanceCode !== null) {
            $result['remittance_code'] = $this->remittanceCode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bank_account'] ?? null) !== null) {
            $obj->bankAccount = (string) $v;
        }
        if (($v = $data['bank_name'] ?? null) !== null) {
            $obj->bankName = (string) $v;
        }
        if (($v = $data['bank_number'] ?? null) !== null) {
            $obj->bankNumber = (string) $v;
        }
        if (($v = $data['payer_name'] ?? null) !== null) {
            $obj->payerName = (string) $v;
        }
        if (($v = $data['receiver_ame'] ?? null) !== null) {
            $obj->receiverAme = (string) $v;
        }
        if (($v = $data['remittance_code'] ?? null) !== null) {
            $obj->remittanceCode = (string) $v;
        }
        return $obj;
    }
}
