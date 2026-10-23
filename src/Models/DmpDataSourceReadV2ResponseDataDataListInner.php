<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceReadV2ResponseDataDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerChangeLogsInner[]
     */
    protected ?array $changeLogs = null;

    /**
     * @var int
     */
    protected ?int $coverNum = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $dataSourceId = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceReadV2DataDataListDataSourceType
     */
    protected ?string $dataSourceType = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience
     */
    protected ?\Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience $defaultAudience = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var int
     */
    protected ?int $lastestPublishedChangeLogId = null;

    /**
     * @var string
     */
    protected ?string $lastestPublishedTime = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var int
     */
    protected ?int $uploadNum = null;

    /**
     * @return \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerChangeLogsInner[]
     */
    public function getChangeLogs(): ?array
    {
        return $this->changeLogs;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerChangeLogsInner[] $changeLogs
     * @return self
     */
    public function setChangeLogs(?array $changeLogs): self
    {
        $this->changeLogs = $changeLogs;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoverNum(): ?int
    {
        return $this->coverNum;
    }

    /**
     * @param int $coverNum
     * @return self
     */
    public function setCoverNum(?int $coverNum): self
    {
        $this->coverNum = $coverNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataSourceId(): ?string
    {
        return $this->dataSourceId;
    }

    /**
     * @param string $dataSourceId
     * @return self
     */
    public function setDataSourceId(?string $dataSourceId): self
    {
        $this->dataSourceId = $dataSourceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpDataSourceReadV2DataDataListDataSourceType
     */
    public function getDataSourceType(): ?string
    {
        return $this->dataSourceType;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceReadV2DataDataListDataSourceType $dataSourceType
     * @return self
     */
    public function setDataSourceType(?string $dataSourceType): self
    {
        $this->dataSourceType = $dataSourceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience
     */
    public function getDefaultAudience(): ?\Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience
    {
        return $this->defaultAudience;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience $defaultAudience
     * @return self
     */
    public function setDefaultAudience(?\Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience $defaultAudience): self
    {
        $this->defaultAudience = $defaultAudience;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastestPublishedChangeLogId(): ?int
    {
        return $this->lastestPublishedChangeLogId;
    }

    /**
     * @param int $lastestPublishedChangeLogId
     * @return self
     */
    public function setLastestPublishedChangeLogId(?int $lastestPublishedChangeLogId): self
    {
        $this->lastestPublishedChangeLogId = $lastestPublishedChangeLogId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastestPublishedTime(): ?string
    {
        return $this->lastestPublishedTime;
    }

    /**
     * @param string $lastestPublishedTime
     * @return self
     */
    public function setLastestPublishedTime(?string $lastestPublishedTime): self
    {
        $this->lastestPublishedTime = $lastestPublishedTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getUploadNum(): ?int
    {
        return $this->uploadNum;
    }

    /**
     * @param int $uploadNum
     * @return self
     */
    public function setUploadNum(?int $uploadNum): self
    {
        $this->uploadNum = $uploadNum;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->changeLogs !== null) {
            $result['change_logs'] = $this->changeLogs;
        }
        if ($this->coverNum !== null) {
            $result['cover_num'] = $this->coverNum;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->dataSourceId !== null) {
            $result['data_source_id'] = $this->dataSourceId;
        }
        if ($this->dataSourceType !== null) {
            $result['data_source_type'] = $this->dataSourceType;
        }
        if ($this->defaultAudience !== null) {
            $result['default_audience'] = $this->defaultAudience;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->lastestPublishedChangeLogId !== null) {
            $result['lastest_published_change_log_id'] = $this->lastestPublishedChangeLogId;
        }
        if ($this->lastestPublishedTime !== null) {
            $result['lastest_published_time'] = $this->lastestPublishedTime;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->uploadNum !== null) {
            $result['upload_num'] = $this->uploadNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['change_logs'] ?? null) !== null && is_array($v)) {
            $obj->changeLogs = array_map(fn ($vv) => \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerChangeLogsInner::fromArray($vv), $v);
        }
        if (($v = $data['cover_num'] ?? null) !== null) {
            $obj->coverNum = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['data_source_id'] ?? null) !== null) {
            $obj->dataSourceId = (string) $v;
        }
        if (($v = $data['data_source_type'] ?? null) !== null) {
            $obj->dataSourceType = (string) $v;
        }
        if (($v = $data['default_audience'] ?? null) !== null && is_array($v)) {
            $obj->defaultAudience = \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInnerDefaultAudience::fromArray($v);
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['lastest_published_change_log_id'] ?? null) !== null) {
            $obj->lastestPublishedChangeLogId = (int) $v;
        }
        if (($v = $data['lastest_published_time'] ?? null) !== null) {
            $obj->lastestPublishedTime = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['upload_num'] ?? null) !== null) {
            $obj->uploadNum = (int) $v;
        }
        return $obj;
    }
}
