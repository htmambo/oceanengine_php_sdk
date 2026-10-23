<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueCallbackV2Request implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var string
     */
    protected ?string $clickId = null;

    /**
     * @var int
     */
    protected ?int $clueConvertState = null;

    /**
     * @var string
     */
    protected ?string $clueId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueCallbackV2RequestEventData
     */
    protected ?\Oceanengine\Models\ToolsClueCallbackV2RequestEventData $eventData = null;

    /**
     * @var int
     */
    protected ?int $source = null;

    /**
     * 回传打标类型：1:人工打标，2:智能客服识别
     * @var int
     */
    protected ?int $sourceType = null;

    /**
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getClickId(): ?string
    {
        return $this->clickId;
    }

    /**
     * @param string $clickId
     * @return self
     */
    public function setClickId(?string $clickId): self
    {
        $this->clickId = $clickId;
        return $this;
    }

    /**
     * @return int
     */
    public function getClueConvertState(): ?int
    {
        return $this->clueConvertState;
    }

    /**
     * @param int $clueConvertState
     * @return self
     */
    public function setClueConvertState(?int $clueConvertState): self
    {
        $this->clueConvertState = $clueConvertState;
        return $this;
    }

    /**
     * @return string
     */
    public function getClueId(): ?string
    {
        return $this->clueId;
    }

    /**
     * @param string $clueId
     * @return self
     */
    public function setClueId(?string $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueCallbackV2RequestEventData
     */
    public function getEventData(): ?\Oceanengine\Models\ToolsClueCallbackV2RequestEventData
    {
        return $this->eventData;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueCallbackV2RequestEventData $eventData
     * @return self
     */
    public function setEventData(?\Oceanengine\Models\ToolsClueCallbackV2RequestEventData $eventData): self
    {
        $this->eventData = $eventData;
        return $this;
    }

    /**
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param int $source
     * @return self
     */
    public function setSource(?int $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 回传打标类型：1:人工打标，2:智能客服识别
     * @return int
     */
    public function getSourceType(): ?int
    {
        return $this->sourceType;
    }

    /**
     * 回传打标类型：1:人工打标，2:智能客服识别
     * @param int $sourceType
     * @return self
     */
    public function setSourceType(?int $sourceType): self
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->clickId !== null) {
            $result['click_id'] = $this->clickId;
        }
        if ($this->clueConvertState !== null) {
            $result['clue_convert_state'] = $this->clueConvertState;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->eventData !== null) {
            $result['event_data'] = $this->eventData;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->sourceType !== null) {
            $result['source_type'] = $this->sourceType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['click_id'] ?? null) !== null) {
            $obj->clickId = (string) $v;
        }
        if (($v = $data['clue_convert_state'] ?? null) !== null) {
            $obj->clueConvertState = (int) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (string) $v;
        }
        if (($v = $data['event_data'] ?? null) !== null && is_array($v)) {
            $obj->eventData = \Oceanengine\Models\ToolsClueCallbackV2RequestEventData::fromArray($v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (int) $v;
        }
        if (($v = $data['source_type'] ?? null) !== null) {
            $obj->sourceType = (int) $v;
        }
        return $obj;
    }
}
