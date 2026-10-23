<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalLifeAdvertiserListV30ResponseDataAdvListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag
     */
    protected ?string $accountMainCopyTag = null;

    /**
     * 账户ID
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalLifeAdvertiserListV30DataAdvListLocalAccountRole
     */
    protected ?string $localAccountRole = null;

    /**
     * @return \Oceanengine\Models\LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag
     */
    public function getAccountMainCopyTag(): ?string
    {
        return $this->accountMainCopyTag;
    }

    /**
     * @param \Oceanengine\Models\LocalLifeAdvertiserListV30DataAdvListAccountMainCopyTag $accountMainCopyTag
     * @return self
     */
    public function setAccountMainCopyTag(?string $accountMainCopyTag): self
    {
        $this->accountMainCopyTag = $accountMainCopyTag;
        return $this;
    }

    /**
     * 账户ID
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 账户ID
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalLifeAdvertiserListV30DataAdvListLocalAccountRole
     */
    public function getLocalAccountRole(): ?string
    {
        return $this->localAccountRole;
    }

    /**
     * @param \Oceanengine\Models\LocalLifeAdvertiserListV30DataAdvListLocalAccountRole $localAccountRole
     * @return self
     */
    public function setLocalAccountRole(?string $localAccountRole): self
    {
        $this->localAccountRole = $localAccountRole;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountMainCopyTag !== null) {
            $result['account_main_copy_tag'] = $this->accountMainCopyTag;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->localAccountRole !== null) {
            $result['local_account_role'] = $this->localAccountRole;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_main_copy_tag'] ?? null) !== null) {
            $obj->accountMainCopyTag = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['local_account_role'] ?? null) !== null) {
            $obj->localAccountRole = (string) $v;
        }
        return $obj;
    }
}
