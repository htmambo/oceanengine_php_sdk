<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterAdvertiserListV2Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        return $obj;
    }
}
