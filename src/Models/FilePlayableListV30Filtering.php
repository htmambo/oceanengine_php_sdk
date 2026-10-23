<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePlayableListV30Filtering implements \JsonSerializable
{
    /**
     * 直玩-应用id列表，试玩不生效
     * @var string[]
     */
    protected ?array $appIds = null;

    /**
     * 可选过滤参数，试玩/直玩包的app_material_id列表
     * @var int[]
     */
    protected ?array $appMaterialIds = null;

    /**
     * @var \Oceanengine\Models\FilePlayableListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 创建时间end yyyy-mm-dd hh24:mi:ss
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 可选过滤参数，文件名称或ID
     * @var string
     */
    protected ?string $keyword = null;

    /**
     * 可选过滤参数，待查询的素材ID列表
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 可选过滤参数，素材MD5值列表
     * @var string[]
     */
    protected ?array $signatures = null;

    /**
     * 创建时间start yyyy-mm-dd hh24:mi:ss
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\FilePlayableListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * 直玩-应用id列表，试玩不生效
     * @return string[]
     */
    public function getAppIds(): ?array
    {
        return $this->appIds;
    }

    /**
     * 直玩-应用id列表，试玩不生效
     * @param string[] $appIds
     * @return self
     */
    public function setAppIds(?array $appIds): self
    {
        $this->appIds = $appIds;
        return $this;
    }

    /**
     * 可选过滤参数，试玩/直玩包的app_material_id列表
     * @return int[]
     */
    public function getAppMaterialIds(): ?array
    {
        return $this->appMaterialIds;
    }

    /**
     * 可选过滤参数，试玩/直玩包的app_material_id列表
     * @param int[] $appMaterialIds
     * @return self
     */
    public function setAppMaterialIds(?array $appMaterialIds): self
    {
        $this->appMaterialIds = $appMaterialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePlayableListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 创建时间end yyyy-mm-dd hh24:mi:ss
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 创建时间end yyyy-mm-dd hh24:mi:ss
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 可选过滤参数，文件名称或ID
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * 可选过滤参数，文件名称或ID
     * @param string $keyword
     * @return self
     */
    public function setKeyword(?string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * 可选过滤参数，待查询的素材ID列表
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 可选过滤参数，待查询的素材ID列表
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 可选过滤参数，素材MD5值列表
     * @return string[]
     */
    public function getSignatures(): ?array
    {
        return $this->signatures;
    }

    /**
     * 可选过滤参数，素材MD5值列表
     * @param string[] $signatures
     * @return self
     */
    public function setSignatures(?array $signatures): self
    {
        $this->signatures = $signatures;
        return $this;
    }

    /**
     * 创建时间start yyyy-mm-dd hh24:mi:ss
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 创建时间start yyyy-mm-dd hh24:mi:ss
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePlayableListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableListV30FilteringStatus $status
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
        if ($this->appIds !== null) {
            $result['app_ids'] = $this->appIds;
        }
        if ($this->appMaterialIds !== null) {
            $result['app_material_ids'] = $this->appMaterialIds;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
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
        if (($v = $data['app_ids'] ?? null) !== null && is_array($v)) {
            $obj->appIds = $v;
        }
        if (($v = $data['app_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->appMaterialIds = $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['keyword'] ?? null) !== null) {
            $obj->keyword = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
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
