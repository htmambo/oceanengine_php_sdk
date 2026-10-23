<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectDiagnosisSuggestionListV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * TOP N分析文案
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * TOP N分析文案
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * TOP N分析文案
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        return $obj;
    }
}
