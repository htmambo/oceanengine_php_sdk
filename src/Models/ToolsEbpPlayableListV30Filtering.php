<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpPlayableListV30Filtering implements \JsonSerializable
{
    /**
     * 试玩/直玩素材mid列表
     * @var int[]
     */
    protected ?array $appMaterialIds = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpPlayableListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 根据上传时间进行过滤的截止时间，与start_time搭配使用 格式：yyyy-mm-dd
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * md5值列表
     * @var string[]
     */
    protected ?array $signatures = null;

    /**
     * 根据上传时间进行过滤的起始时间，与end_time搭配使用 格式：yyyy-mm-dd
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpPlayableListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * 试玩/直玩素材mid列表
     * @return int[]
     */
    public function getAppMaterialIds(): ?array
    {
        return $this->appMaterialIds;
    }

    /**
     * 试玩/直玩素材mid列表
     * @param int[] $appMaterialIds
     * @return self
     */
    public function setAppMaterialIds(?array $appMaterialIds): self
    {
        $this->appMaterialIds = $appMaterialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpPlayableListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpPlayableListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 根据上传时间进行过滤的截止时间，与start_time搭配使用 格式：yyyy-mm-dd
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 根据上传时间进行过滤的截止时间，与start_time搭配使用 格式：yyyy-mm-dd
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * md5值列表
     * @return string[]
     */
    public function getSignatures(): ?array
    {
        return $this->signatures;
    }

    /**
     * md5值列表
     * @param string[] $signatures
     * @return self
     */
    public function setSignatures(?array $signatures): self
    {
        $this->signatures = $signatures;
        return $this;
    }

    /**
     * 根据上传时间进行过滤的起始时间，与end_time搭配使用 格式：yyyy-mm-dd
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 根据上传时间进行过滤的起始时间，与end_time搭配使用 格式：yyyy-mm-dd
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpPlayableListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpPlayableListV30FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appMaterialIds !== null) {
            $result['app_material_ids'] = $this->appMaterialIds;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->signatures !== null) {
            $result['signatures'] = $this->signatures;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->appMaterialIds = $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['signatures'] ?? null) !== null && is_array($v)) {
            $obj->signatures = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
