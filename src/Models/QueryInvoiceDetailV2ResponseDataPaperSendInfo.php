<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceDetailV2ResponseDataPaperSendInfo implements \JsonSerializable
{
    /**
     * 快递公司
     * @var string
     */
    protected ?string $expressCompany = null;

    /**
     * 寄件日期
     * @var string
     */
    protected ?string $expressDate = null;

    /**
     * 快递单号
     * @var string
     */
    protected ?string $expressNumber = null;

    /**
     * 快递公司
     * @return string
     */
    public function getExpressCompany(): ?string
    {
        return $this->expressCompany;
    }

    /**
     * 快递公司
     * @param string $expressCompany
     * @return self
     */
    public function setExpressCompany(?string $expressCompany): self
    {
        $this->expressCompany = $expressCompany;
        return $this;
    }

    /**
     * 寄件日期
     * @return string
     */
    public function getExpressDate(): ?string
    {
        return $this->expressDate;
    }

    /**
     * 寄件日期
     * @param string $expressDate
     * @return self
     */
    public function setExpressDate(?string $expressDate): self
    {
        $this->expressDate = $expressDate;
        return $this;
    }

    /**
     * 快递单号
     * @return string
     */
    public function getExpressNumber(): ?string
    {
        return $this->expressNumber;
    }

    /**
     * 快递单号
     * @param string $expressNumber
     * @return self
     */
    public function setExpressNumber(?string $expressNumber): self
    {
        $this->expressNumber = $expressNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->expressCompany !== null) {
            $result['express_company'] = $this->expressCompany;
        }
        if ($this->expressDate !== null) {
            $result['express_date'] = $this->expressDate;
        }
        if ($this->expressNumber !== null) {
            $result['express_number'] = $this->expressNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['express_company'] ?? null) !== null) {
            $obj->expressCompany = (string) $v;
        }
        if (($v = $data['express_date'] ?? null) !== null) {
            $obj->expressDate = (string) $v;
        }
        if (($v = $data['express_number'] ?? null) !== null) {
            $obj->expressNumber = (string) $v;
        }
        return $obj;
    }
}
