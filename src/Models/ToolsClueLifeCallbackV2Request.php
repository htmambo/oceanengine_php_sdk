<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueLifeCallbackV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsClueLifeCallbackV2ClueConvertState
     */
    protected ?string $clueConvertState = null;

    /**
     * @var string
     */
    protected ?string $clueId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeCallbackV2RequestEventData
     */
    protected ?\Oceanengine\Models\ToolsClueLifeCallbackV2RequestEventData $eventData = null;

    /**
     * @var string[]
     */
    protected ?array $localAccountIds = null;

    /**
     * @return \Oceanengine\Models\ToolsClueLifeCallbackV2ClueConvertState
     */
    public function getClueConvertState(): ?string
    {
        return $this->clueConvertState;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeCallbackV2ClueConvertState $clueConvertState
     * @return self
     */
    public function setClueConvertState(?string $clueConvertState): self
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
     * @return \Oceanengine\Models\ToolsClueLifeCallbackV2RequestEventData
     */
    public function getEventData(): ?\Oceanengine\Models\ToolsClueLifeCallbackV2RequestEventData
    {
        return $this->eventData;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeCallbackV2RequestEventData $eventData
     * @return self
     */
    public function setEventData(?\Oceanengine\Models\ToolsClueLifeCallbackV2RequestEventData $eventData): self
    {
        $this->eventData = $eventData;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLocalAccountIds(): ?array
    {
        return $this->localAccountIds;
    }

    /**
     * @param string[] $localAccountIds
     * @return self
     */
    public function setLocalAccountIds(?array $localAccountIds): self
    {
        $this->localAccountIds = $localAccountIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clueConvertState !== null) {
            $result['clue_convert_state'] = $this->clueConvertState;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->eventData !== null) {
            $result['event_data'] = $this->eventData;
        }
        if ($this->localAccountIds !== null) {
            $result['local_account_ids'] = $this->localAccountIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clue_convert_state'] ?? null) !== null) {
            $obj->clueConvertState = (string) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (string) $v;
        }
        if (($v = $data['event_data'] ?? null) !== null && is_array($v)) {
            $obj->eventData = \Oceanengine\Models\ToolsClueLifeCallbackV2RequestEventData::fromArray($v);
        }
        if (($v = $data['local_account_ids'] ?? null) !== null && is_array($v)) {
            $obj->localAccountIds = $v;
        }
        return $obj;
    }
}
