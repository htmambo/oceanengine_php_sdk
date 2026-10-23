<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueExtInfoCallbackV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 回传时间，秒级时间戳
     * @var int
     */
    protected ?int $callbackTime = null;

    /**
     * @var \Oceanengine\Models\ToolsClueExtInfoCallbackV2ClueEvent
     */
    protected ?string $clueEvent = null;

    /**
     * 线索id
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueExtInfoCallbackV2ExtKey
     */
    protected ?string $extKey = null;

    /**
     * 扩展信息value
     * @var string
     */
    protected ?string $extValue = null;

    /**
     * 完整阶段描述（严格有序）<br>当扩展信息中传【客户阶段】或【订单状态】时，将完整的客户阶段和订单状态传入该字段<br>例：客户完整阶段【未联系-产生意向-可跟进客户-邀约上门-成交】
     * @var string[]
     */
    protected ?array $extValueDetail = null;

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
     * 回传时间，秒级时间戳
     * @return int
     */
    public function getCallbackTime(): ?int
    {
        return $this->callbackTime;
    }

    /**
     * 回传时间，秒级时间戳
     * @param int $callbackTime
     * @return self
     */
    public function setCallbackTime(?int $callbackTime): self
    {
        $this->callbackTime = $callbackTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueExtInfoCallbackV2ClueEvent
     */
    public function getClueEvent(): ?string
    {
        return $this->clueEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueExtInfoCallbackV2ClueEvent $clueEvent
     * @return self
     */
    public function setClueEvent(?string $clueEvent): self
    {
        $this->clueEvent = $clueEvent;
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
     * @return \Oceanengine\Models\ToolsClueExtInfoCallbackV2ExtKey
     */
    public function getExtKey(): ?string
    {
        return $this->extKey;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueExtInfoCallbackV2ExtKey $extKey
     * @return self
     */
    public function setExtKey(?string $extKey): self
    {
        $this->extKey = $extKey;
        return $this;
    }

    /**
     * 扩展信息value
     * @return string
     */
    public function getExtValue(): ?string
    {
        return $this->extValue;
    }

    /**
     * 扩展信息value
     * @param string $extValue
     * @return self
     */
    public function setExtValue(?string $extValue): self
    {
        $this->extValue = $extValue;
        return $this;
    }

    /**
     * 完整阶段描述（严格有序）<br>当扩展信息中传【客户阶段】或【订单状态】时，将完整的客户阶段和订单状态传入该字段<br>例：客户完整阶段【未联系-产生意向-可跟进客户-邀约上门-成交】
     * @return string[]
     */
    public function getExtValueDetail(): ?array
    {
        return $this->extValueDetail;
    }

    /**
     * 完整阶段描述（严格有序）<br>当扩展信息中传【客户阶段】或【订单状态】时，将完整的客户阶段和订单状态传入该字段<br>例：客户完整阶段【未联系-产生意向-可跟进客户-邀约上门-成交】
     * @param string[] $extValueDetail
     * @return self
     */
    public function setExtValueDetail(?array $extValueDetail): self
    {
        $this->extValueDetail = $extValueDetail;
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
        if ($this->callbackTime !== null) {
            $result['callback_time'] = $this->callbackTime;
        }
        if ($this->clueEvent !== null) {
            $result['clue_event'] = $this->clueEvent;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->extKey !== null) {
            $result['ext_key'] = $this->extKey;
        }
        if ($this->extValue !== null) {
            $result['ext_value'] = $this->extValue;
        }
        if ($this->extValueDetail !== null) {
            $result['ext_value_detail'] = $this->extValueDetail;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['callback_time'] ?? null) !== null) {
            $obj->callbackTime = (int) $v;
        }
        if (($v = $data['clue_event'] ?? null) !== null) {
            $obj->clueEvent = (string) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['ext_key'] ?? null) !== null) {
            $obj->extKey = (string) $v;
        }
        if (($v = $data['ext_value'] ?? null) !== null) {
            $obj->extValue = (string) $v;
        }
        if (($v = $data['ext_value_detail'] ?? null) !== null && is_array($v)) {
            $obj->extValueDetail = $v;
        }
        return $obj;
    }
}
