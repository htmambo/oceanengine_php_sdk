<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueBridgeCallCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 被叫号码，即线索号码
     * @var string
     */
    protected ?string $calleeNumber = null;

    /**
     * 主叫号码，必须为11位手机号码，否则呼叫失败。
     * @var string
     */
    protected ?string $callerNumber = null;

    /**
     * 线索id
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 被叫号码，即线索号码
     * @return string
     */
    public function getCalleeNumber(): ?string
    {
        return $this->calleeNumber;
    }

    /**
     * 被叫号码，即线索号码
     * @param string $calleeNumber
     * @return self
     */
    public function setCalleeNumber(?string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
        return $this;
    }

    /**
     * 主叫号码，必须为11位手机号码，否则呼叫失败。
     * @return string
     */
    public function getCallerNumber(): ?string
    {
        return $this->callerNumber;
    }

    /**
     * 主叫号码，必须为11位手机号码，否则呼叫失败。
     * @param string $callerNumber
     * @return self
     */
    public function setCallerNumber(?string $callerNumber): self
    {
        $this->callerNumber = $callerNumber;
        return $this;
    }

    /**
     * 线索id
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * 线索id
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
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
        if ($this->calleeNumber !== null) {
            $result['callee_number'] = $this->calleeNumber;
        }
        if ($this->callerNumber !== null) {
            $result['caller_number'] = $this->callerNumber;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
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
        return $obj;
    }
}
