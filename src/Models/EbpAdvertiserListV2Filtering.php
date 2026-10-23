<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAdvertiserListV2Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * @var bool
     */
    protected ?bool $activeAccount = null;

    /**
     * @var \Oceanengine\Models\EbpAdvertiserListV2FilteringQueryType
     */
    protected ?string $queryType = null;

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
     * @return bool
     */
    public function getActiveAccount(): ?bool
    {
        return $this->activeAccount;
    }

    /**
     * @param bool $activeAccount
     * @return self
     */
    public function setActiveAccount(?bool $activeAccount): self
    {
        $this->activeAccount = $activeAccount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpAdvertiserListV2FilteringQueryType
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }

    /**
     * @param \Oceanengine\Models\EbpAdvertiserListV2FilteringQueryType $queryType
     * @return self
     */
    public function setQueryType(?string $queryType): self
    {
        $this->queryType = $queryType;
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
        if ($this->activeAccount !== null) {
            $result['active_account'] = $this->activeAccount;
        }
        if ($this->queryType !== null) {
            $result['query_type'] = $this->queryType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['active_account'] ?? null) !== null) {
            $obj->activeAccount = (bool) $v;
        }
        if (($v = $data['query_type'] ?? null) !== null) {
            $obj->queryType = (string) $v;
        }
        return $obj;
    }
}
