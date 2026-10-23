<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentMetricsGetV30Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $authorIds = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentMetricsGetV30FilteringHideStatus
     */
    protected ?string $hideStatus = null;

    /**
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentMetricsGetV30FilteringLevelType
     */
    protected ?string $levelType = null;

    /**
     * @return int[]
     */
    public function getAuthorIds(): ?array
    {
        return $this->authorIds;
    }

    /**
     * @param int[] $authorIds
     * @return self
     */
    public function setAuthorIds(?array $authorIds): self
    {
        $this->authorIds = $authorIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentMetricsGetV30FilteringHideStatus
     */
    public function getHideStatus(): ?string
    {
        return $this->hideStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentMetricsGetV30FilteringHideStatus $hideStatus
     * @return self
     */
    public function setHideStatus(?string $hideStatus): self
    {
        $this->hideStatus = $hideStatus;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentMetricsGetV30FilteringLevelType
     */
    public function getLevelType(): ?string
    {
        return $this->levelType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentMetricsGetV30FilteringLevelType $levelType
     * @return self
     */
    public function setLevelType(?string $levelType): self
    {
        $this->levelType = $levelType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorIds !== null) {
            $result['author_ids'] = $this->authorIds;
        }
        if ($this->hideStatus !== null) {
            $result['hide_status'] = $this->hideStatus;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->levelType !== null) {
            $result['level_type'] = $this->levelType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_ids'] ?? null) !== null && is_array($v)) {
            $obj->authorIds = $v;
        }
        if (($v = $data['hide_status'] ?? null) !== null) {
            $obj->hideStatus = (string) $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['level_type'] ?? null) !== null) {
            $obj->levelType = (string) $v;
        }
        return $obj;
    }
}
