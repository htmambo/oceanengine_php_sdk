<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferTransferCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 转账单号
     * @var string
     */
    protected ?string $transferSerial = null;

    /**
     * 转账单号
     * @return string
     */
    public function getTransferSerial(): ?string
    {
        return $this->transferSerial;
    }

    /**
     * 转账单号
     * @param string $transferSerial
     * @return self
     */
    public function setTransferSerial(?string $transferSerial): self
    {
        $this->transferSerial = $transferSerial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->transferSerial !== null) {
            $result['transfer_serial'] = $this->transferSerial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['transfer_serial'] ?? null) !== null) {
            $obj->transferSerial = (string) $v;
        }
        return $obj;
    }
}
