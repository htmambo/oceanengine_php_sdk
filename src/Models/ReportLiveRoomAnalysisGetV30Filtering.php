<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportLiveRoomAnalysisGetV30Filtering implements \JsonSerializable
{
    /**
     * 抖音号id
     * @var string[]
     */
    protected ?array $awemeIds = null;

    /**
     * @var \Oceanengine\Models\ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory
     */
    protected ?string $firstFlowCategory = null;

    /**
     * @var int[]
     */
    protected ?array $roomIds = null;

    /**
     * 抖音号id
     * @return string[]
     */
    public function getAwemeIds(): ?array
    {
        return $this->awemeIds;
    }

    /**
     * 抖音号id
     * @param string[] $awemeIds
     * @return self
     */
    public function setAwemeIds(?array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory
     */
    public function getFirstFlowCategory(): ?string
    {
        return $this->firstFlowCategory;
    }

    /**
     * @param \Oceanengine\Models\ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory $firstFlowCategory
     * @return self
     */
    public function setFirstFlowCategory(?string $firstFlowCategory): self
    {
        $this->firstFlowCategory = $firstFlowCategory;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRoomIds(): ?array
    {
        return $this->roomIds;
    }

    /**
     * @param int[] $roomIds
     * @return self
     */
    public function setRoomIds(?array $roomIds): self
    {
        $this->roomIds = $roomIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeIds !== null) {
            $result['aweme_ids'] = $this->awemeIds;
        }
        if ($this->firstFlowCategory !== null) {
            $result['first_flow_category'] = $this->firstFlowCategory;
        }
        if ($this->roomIds !== null) {
            $result['room_ids'] = $this->roomIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeIds = $v;
        }
        if (($v = $data['first_flow_category'] ?? null) !== null) {
            $obj->firstFlowCategory = (string) $v;
        }
        if (($v = $data['room_ids'] ?? null) !== null && is_array($v)) {
            $obj->roomIds = $v;
        }
        return $obj;
    }
}
