<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsBidRatioCreateV30ResponseDataConflictInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $advName = null;

    /**
     * @var float[]
     */
    protected ?array $bidCoefs = null;

    /**
     * @var \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30DataConflictDimension
     */
    protected ?string $dimension = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $projectName = null;

    /**
     * @var string
     */
    protected ?string $word = null;

    /**
     * @return string
     */
    public function getAdvName(): ?string
    {
        return $this->advName;
    }

    /**
     * @param string $advName
     * @return self
     */
    public function setAdvName(?string $advName): self
    {
        $this->advName = $advName;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getBidCoefs(): ?array
    {
        return $this->bidCoefs;
    }

    /**
     * @param float[] $bidCoefs
     * @return self
     */
    public function setBidCoefs(?array $bidCoefs): self
    {
        $this->bidCoefs = $bidCoefs;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30DataConflictDimension
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30DataConflictDimension $dimension
     * @return self
     */
    public function setDimension(?string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWord(): ?string
    {
        return $this->word;
    }

    /**
     * @param string $word
     * @return self
     */
    public function setWord(?string $word): self
    {
        $this->word = $word;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advName !== null) {
            $result['advName'] = $this->advName;
        }
        if ($this->bidCoefs !== null) {
            $result['bidCoefs'] = $this->bidCoefs;
        }
        if ($this->dimension !== null) {
            $result['dimension'] = $this->dimension;
        }
        if ($this->projectId !== null) {
            $result['projectId'] = $this->projectId;
        }
        if ($this->projectName !== null) {
            $result['projectName'] = $this->projectName;
        }
        if ($this->word !== null) {
            $result['word'] = $this->word;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advName'] ?? null) !== null) {
            $obj->advName = (string) $v;
        }
        if (($v = $data['bidCoefs'] ?? null) !== null && is_array($v)) {
            $obj->bidCoefs = $v;
        }
        if (($v = $data['dimension'] ?? null) !== null) {
            $obj->dimension = (string) $v;
        }
        if (($v = $data['projectId'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['projectName'] ?? null) !== null) {
            $obj->projectName = (string) $v;
        }
        if (($v = $data['word'] ?? null) !== null) {
            $obj->word = (string) $v;
        }
        return $obj;
    }
}
