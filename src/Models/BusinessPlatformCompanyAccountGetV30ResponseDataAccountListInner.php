<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BusinessPlatformCompanyAccountGetV30ResponseDataAccountListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30DataAccountListAccountType
     */
    protected ?string $accountType = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30DataAccountListAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30DataAccountListAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        return $obj;
    }
}
