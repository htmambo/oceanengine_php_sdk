<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseRecordsGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo
     */
    protected ?\Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo $raiseInfo = null;

    /**
     * 起量任务ID
     * @var int
     */
    protected ?int $recordId = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * 起量版本
     * @var int
     */
    protected ?int $version = null;

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
     * @return \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo
     */
    public function getRaiseInfo(): ?\Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo
    {
        return $this->raiseInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo $raiseInfo
     * @return self
     */
    public function setRaiseInfo(?\Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo $raiseInfo): self
    {
        $this->raiseInfo = $raiseInfo;
        return $this;
    }

    /**
     * 起量任务ID
     * @return int
     */
    public function getRecordId(): ?int
    {
        return $this->recordId;
    }

    /**
     * 起量任务ID
     * @param int $recordId
     * @return self
     */
    public function setRecordId(?int $recordId): self
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 起量版本
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * 起量版本
     * @param int $version
     * @return self
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;
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
        if ($this->raiseInfo !== null) {
            $result['raise_info'] = $this->raiseInfo;
        }
        if ($this->recordId !== null) {
            $result['record_id'] = $this->recordId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['raise_info'] ?? null) !== null && is_array($v)) {
            $obj->raiseInfo = \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo::fromArray($v);
        }
        if (($v = $data['record_id'] ?? null) !== null) {
            $obj->recordId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (int) $v;
        }
        return $obj;
    }
}
