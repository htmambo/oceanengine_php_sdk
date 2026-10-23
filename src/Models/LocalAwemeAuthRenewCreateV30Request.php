<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthRenewCreateV30Request implements \JsonSerializable
{
    /**
     * 新的授权截止时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 授权ID
     * @var int
     */
    protected ?int $inviteId = null;

    /**
     * 投放账户ID
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 新的授权截止时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 新的授权截止时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

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
     * 投放账户ID
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 投放账户ID
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
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
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
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['invite_id'] ?? null) !== null) {
            $obj->inviteId = (int) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        return $obj;
    }
}
