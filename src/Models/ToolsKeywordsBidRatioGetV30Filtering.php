<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsBidRatioGetV30Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * @var string[]
     */
    protected ?array $words = null;

    /**
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWords(): ?array
    {
        return $this->words;
    }

    /**
     * @param string[] $words
     * @return self
     */
    public function setWords(?array $words): self
    {
        $this->words = $words;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        if ($this->words !== null) {
            $result['words'] = $this->words;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        if (($v = $data['words'] ?? null) !== null && is_array($v)) {
            $obj->words = $v;
        }
        return $obj;
    }
}
