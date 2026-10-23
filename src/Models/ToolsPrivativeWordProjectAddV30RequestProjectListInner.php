<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordProjectAddV30RequestProjectListInner implements \JsonSerializable
{
    /**
     * 短语否定词列表
     * @var string[]
     */
    protected ?array $phraseWords = null;

    /**
     * 精确否定词列表
     * @var string[]
     */
    protected ?array $preciseWords = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 短语否定词列表
     * @return string[]
     */
    public function getPhraseWords(): ?array
    {
        return $this->phraseWords;
    }

    /**
     * 短语否定词列表
     * @param string[] $phraseWords
     * @return self
     */
    public function setPhraseWords(?array $phraseWords): self
    {
        $this->phraseWords = $phraseWords;
        return $this;
    }

    /**
     * 精确否定词列表
     * @return string[]
     */
    public function getPreciseWords(): ?array
    {
        return $this->preciseWords;
    }

    /**
     * 精确否定词列表
     * @param string[] $preciseWords
     * @return self
     */
    public function setPreciseWords(?array $preciseWords): self
    {
        $this->preciseWords = $preciseWords;
        return $this;
    }

    /**
     * 项目id
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目id
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->phraseWords !== null) {
            $result['phrase_words'] = $this->phraseWords;
        }
        if ($this->preciseWords !== null) {
            $result['precise_words'] = $this->preciseWords;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['phrase_words'] ?? null) !== null && is_array($v)) {
            $obj->phraseWords = $v;
        }
        if (($v = $data['precise_words'] ?? null) !== null && is_array($v)) {
            $obj->preciseWords = $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
