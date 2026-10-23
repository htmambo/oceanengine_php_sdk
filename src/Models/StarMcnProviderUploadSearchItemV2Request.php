<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderUploadSearchItemV2Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $authorSearchWord = null;

    /**
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return string
     */
    public function getAuthorSearchWord(): ?string
    {
        return $this->authorSearchWord;
    }

    /**
     * @param string $authorSearchWord
     * @return self
     */
    public function setAuthorSearchWord(?string $authorSearchWord): self
    {
        $this->authorSearchWord = $authorSearchWord;
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
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorSearchWord !== null) {
            $result['author_search_word'] = $this->authorSearchWord;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_search_word'] ?? null) !== null) {
            $obj->authorSearchWord = (string) $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
