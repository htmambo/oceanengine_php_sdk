<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthCancelUpdateV30Request implements \JsonSerializable
{
    /**
     * 授权ID
     * @var int
     */
    protected ?int $inviteId = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 授权ID
     * @return int
     */
    public function getInviteId(): ?int
    {
        return $this->inviteId;
    }

    /**
     * 授权ID
     * @param int $inviteId
     * @return self
     */
    public function setInviteId(?int $inviteId): self
    {
        $this->inviteId = $inviteId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->inviteId !== null) {
            $result['invite_id'] = $this->inviteId;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invite_id'] ?? null) !== null) {
            $obj->inviteId = (int) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        return $obj;
    }
}
