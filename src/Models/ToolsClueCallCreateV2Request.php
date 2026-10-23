<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueCallCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 呼叫方式。1表示axb，3表示双呼，4表示网络电话。
     * @var int
     */
    protected ?int $callType = null;

    /**
     * 线索号码
     * @var string
     */
    protected ?string $calleeNumber = null;

    /**
     * 客服电话。当呼叫方式为网络电话时，该字段可不传，其他类型均要传该字段。当呼叫方式为axb时，拨打中间号的手机号必须要与该号码一致。
     * @var string
     */
    protected ?string $callerNumber = null;

    /**
     * 线索ID
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * 客服ID。平台下客服ID不得重复。
     * @var int
     */
    protected ?int $userId = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 呼叫方式。1表示axb，3表示双呼，4表示网络电话。
     * @return int
     */
    public function getCallType(): ?int
    {
        return $this->callType;
    }

    /**
     * 呼叫方式。1表示axb，3表示双呼，4表示网络电话。
     * @param int $callType
     * @return self
     */
    public function setCallType(?int $callType): self
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * 线索号码
     * @return string
     */
    public function getCalleeNumber(): ?string
    {
        return $this->calleeNumber;
    }

    /**
     * 线索号码
     * @param string $calleeNumber
     * @return self
     */
    public function setCalleeNumber(?string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
        return $this;
    }

    /**
     * 客服电话。当呼叫方式为网络电话时，该字段可不传，其他类型均要传该字段。当呼叫方式为axb时，拨打中间号的手机号必须要与该号码一致。
     * @return string
     */
    public function getCallerNumber(): ?string
    {
        return $this->callerNumber;
    }

    /**
     * 客服电话。当呼叫方式为网络电话时，该字段可不传，其他类型均要传该字段。当呼叫方式为axb时，拨打中间号的手机号必须要与该号码一致。
     * @param string $callerNumber
     * @return self
     */
    public function setCallerNumber(?string $callerNumber): self
    {
        $this->callerNumber = $callerNumber;
        return $this;
    }

    /**
     * 线索ID
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * 线索ID
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 客服ID。平台下客服ID不得重复。
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * 客服ID。平台下客服ID不得重复。
     * @param int $userId
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->callType !== null) {
            $result['call_type'] = $this->callType;
        }
        if ($this->calleeNumber !== null) {
            $result['callee_number'] = $this->calleeNumber;
        }
        if ($this->callerNumber !== null) {
            $result['caller_number'] = $this->callerNumber;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->userId !== null) {
            $result['user_id'] = $this->userId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['call_type'] ?? null) !== null) {
            $obj->callType = (int) $v;
        }
        if (($v = $data['callee_number'] ?? null) !== null) {
            $obj->calleeNumber = (string) $v;
        }
        if (($v = $data['caller_number'] ?? null) !== null) {
            $obj->callerNumber = (string) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['user_id'] ?? null) !== null) {
            $obj->userId = (int) $v;
        }
        return $obj;
    }
}
