<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectCreateV30RequestProjectMaterialsTitleMaterialListInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $dpaWordList = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * 动态词包
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
     * 动态词包
     * @return int[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * 动态词包
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
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = $v;
        }
        return $obj;
    }
}
