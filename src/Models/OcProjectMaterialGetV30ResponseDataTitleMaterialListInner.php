<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataTitleMaterialListInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $dpaWordList = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * 标题素材词包ID列表
     * @var int[]
     */
    protected ?array $wordList = null;

    /**
     * @return int[]
     */
    public function getDpaWordList(): ?array
    {
        return $this->dpaWordList;
    }

    /**
     * @param int[] $dpaWordList
     * @return self
     */
    public function setDpaWordList(?array $dpaWordList): self
    {
        $this->dpaWordList = $dpaWordList;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 标题素材词包ID列表
     * @return int[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * 标题素材词包ID列表
     * @param int[] $wordList
     * @return self
     */
    public function setWordList(?array $wordList): self
    {
        $this->wordList = $wordList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dpaWordList !== null) {
            $result['dpa_word_list'] = $this->dpaWordList;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->wordList !== null) {
            $result['word_list'] = $this->wordList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dpa_word_list'] ?? null) !== null && is_array($v)) {
            $obj->dpaWordList = $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = $v;
        }
        return $obj;
    }
}
