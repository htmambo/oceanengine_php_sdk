<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceDetailV2ResponseDataPaperReceiveInfo implements \JsonSerializable
{
    /**
     * 收件地址
     * @var string
     */
    protected ?string $address = null;

    /**
     * 联系电话
     * @var string
     */
    protected ?string $phone = null;

    /**
     * 收件人
     * @var string
     */
    protected ?string $recipient = null;

    /**
     * 省市区
     * @var string
     */
    protected ?string $region = null;

    /**
     * 收件地址
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * 收件地址
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * 联系电话
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 联系电话
     * @param string $phone
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 收件人
     * @return string
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    /**
     * 收件人
     * @param string $recipient
     * @return self
     */
    public function setRecipient(?string $recipient): self
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * 省市区
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * 省市区
     * @param string $region
     * @return self
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->recipient !== null) {
            $result['recipient'] = $this->recipient;
        }
        if ($this->region !== null) {
            $result['region'] = $this->region;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['phone'] ?? null) !== null) {
            $obj->phone = (string) $v;
        }
        if (($v = $data['recipient'] ?? null) !== null) {
            $obj->recipient = (string) $v;
        }
        if (($v = $data['region'] ?? null) !== null) {
            $obj->region = (string) $v;
        }
        return $obj;
    }
}
