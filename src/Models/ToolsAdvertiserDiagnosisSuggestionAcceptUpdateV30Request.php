<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30RequestProjectAdjustListInner[]
     */
    protected ?array $projectAdjustList = null;

    /**
     * @var string
     */
    protected ?string $suggestId = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30RequestProjectAdjustListInner[]
     */
    public function getProjectAdjustList(): ?array
    {
        return $this->projectAdjustList;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30RequestProjectAdjustListInner[] $projectAdjustList
     * @return self
     */
    public function setProjectAdjustList(?array $projectAdjustList): self
    {
        $this->projectAdjustList = $projectAdjustList;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuggestId(): ?string
    {
        return $this->suggestId;
    }

    /**
     * @param string $suggestId
     * @return self
     */
    public function setSuggestId(?string $suggestId): self
    {
        $this->suggestId = $suggestId;
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
        if ($this->projectAdjustList !== null) {
            $result['project_adjust_list'] = $this->projectAdjustList;
        }
        if ($this->suggestId !== null) {
            $result['suggest_id'] = $this->suggestId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['project_adjust_list'] ?? null) !== null && is_array($v)) {
            $obj->projectAdjustList = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30RequestProjectAdjustListInner::fromArray($vv), $v);
        }
        if (($v = $data['suggest_id'] ?? null) !== null) {
            $obj->suggestId = (string) $v;
        }
        return $obj;
    }
}
