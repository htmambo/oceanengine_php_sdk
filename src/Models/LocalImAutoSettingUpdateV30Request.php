<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImAutoSettingUpdateV30Request implements \JsonSerializable
{
    /**
     * 9代表微信号识别
     * @var int
     */
    protected ?int $eventType = null;

    /**
     * 生服账户
     * @var int
     */
    protected ?int $lifeAccountId = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalImAutoSettingUpdateV30SourceName
     */
    protected ?string $sourceName = null;

    /**
     * 开关状态 true-开启 false-关闭
     * @var bool
     */
    protected ?bool $switchState = null;

    /**
     * 9代表微信号识别
     * @return int
     */
    public function getEventType(): ?int
    {
        return $this->eventType;
    }

    /**
     * 9代表微信号识别
     * @param int $eventType
     * @return self
     */
    public function setEventType(?int $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * 生服账户
     * @return int
     */
    public function getLifeAccountId(): ?int
    {
        return $this->lifeAccountId;
    }

    /**
     * 生服账户
     * @param int $lifeAccountId
     * @return self
     */
    public function setLifeAccountId(?int $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
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
     * @return \Oceanengine\Models\LocalImAutoSettingUpdateV30SourceName
     */
    public function getSourceName(): ?string
    {
        return $this->sourceName;
    }

    /**
     * @param \Oceanengine\Models\LocalImAutoSettingUpdateV30SourceName $sourceName
     * @return self
     */
    public function setSourceName(?string $sourceName): self
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    /**
     * 开关状态 true-开启 false-关闭
     * @return bool
     */
    public function getSwitchState(): ?bool
    {
        return $this->switchState;
    }

    /**
     * 开关状态 true-开启 false-关闭
     * @param bool $switchState
     * @return self
     */
    public function setSwitchState(?bool $switchState): self
    {
        $this->switchState = $switchState;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->eventType !== null) {
            $result['event_type'] = $this->eventType;
        }
        if ($this->lifeAccountId !== null) {
            $result['life_account_id'] = $this->lifeAccountId;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->sourceName !== null) {
            $result['source_name'] = $this->sourceName;
        }
        if ($this->switchState !== null) {
            $result['switch_state'] = $this->switchState;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (int) $v;
        }
        if (($v = $data['life_account_id'] ?? null) !== null) {
            $obj->lifeAccountId = (int) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['source_name'] ?? null) !== null) {
            $obj->sourceName = (string) $v;
        }
        if (($v = $data['switch_state'] ?? null) !== null) {
            $obj->switchState = (bool) $v;
        }
        return $obj;
    }
}
