<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf implements \JsonSerializable
{
    /**
     * 数据文件，手动上传文件时有
     * @var string
     */
    protected ?string $dataFile = null;

    /**
     * 更新状态
     * @var int
     */
    protected ?int $feedStatus = null;

    /**
     * 数据文件类型
     * @var string
     */
    protected ?string $fileType = null;

    /**
     * 索引地址，自动更新时有
     * @var string
     */
    protected ?string $idxUrl = null;

    /**
     * 上次更新时间
     * @var string
     */
    protected ?string $lastUpdateTime = null;

    /**
     * 调度方式(自动/手动)
     * @var int
     */
    protected ?int $scheduleType = null;

    /**
     * 商品总数
     * @var int
     */
    protected ?int $totalCnt = null;

    /**
     * 更新周期
     * @var string
     */
    protected ?string $updateCron = null;

    /**
     * 更新方式(全量/增量)
     * @var int
     */
    protected ?int $updateMode = null;

    /**
     * 商品正常数量
     * @var int
     */
    protected ?int $updatedCnt = null;

    /**
     * 数据文件，手动上传文件时有
     * @return string
     */
    public function getDataFile(): ?string
    {
        return $this->dataFile;
    }

    /**
     * 数据文件，手动上传文件时有
     * @param string $dataFile
     * @return self
     */
    public function setDataFile(?string $dataFile): self
    {
        $this->dataFile = $dataFile;
        return $this;
    }

    /**
     * 更新状态
     * @return int
     */
    public function getFeedStatus(): ?int
    {
        return $this->feedStatus;
    }

    /**
     * 更新状态
     * @param int $feedStatus
     * @return self
     */
    public function setFeedStatus(?int $feedStatus): self
    {
        $this->feedStatus = $feedStatus;
        return $this;
    }

    /**
     * 数据文件类型
     * @return string
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }

    /**
     * 数据文件类型
     * @param string $fileType
     * @return self
     */
    public function setFileType(?string $fileType): self
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * 索引地址，自动更新时有
     * @return string
     */
    public function getIdxUrl(): ?string
    {
        return $this->idxUrl;
    }

    /**
     * 索引地址，自动更新时有
     * @param string $idxUrl
     * @return self
     */
    public function setIdxUrl(?string $idxUrl): self
    {
        $this->idxUrl = $idxUrl;
        return $this;
    }

    /**
     * 上次更新时间
     * @return string
     */
    public function getLastUpdateTime(): ?string
    {
        return $this->lastUpdateTime;
    }

    /**
     * 上次更新时间
     * @param string $lastUpdateTime
     * @return self
     */
    public function setLastUpdateTime(?string $lastUpdateTime): self
    {
        $this->lastUpdateTime = $lastUpdateTime;
        return $this;
    }

    /**
     * 调度方式(自动/手动)
     * @return int
     */
    public function getScheduleType(): ?int
    {
        return $this->scheduleType;
    }

    /**
     * 调度方式(自动/手动)
     * @param int $scheduleType
     * @return self
     */
    public function setScheduleType(?int $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * 商品总数
     * @return int
     */
    public function getTotalCnt(): ?int
    {
        return $this->totalCnt;
    }

    /**
     * 商品总数
     * @param int $totalCnt
     * @return self
     */
    public function setTotalCnt(?int $totalCnt): self
    {
        $this->totalCnt = $totalCnt;
        return $this;
    }

    /**
     * 更新周期
     * @return string
     */
    public function getUpdateCron(): ?string
    {
        return $this->updateCron;
    }

    /**
     * 更新周期
     * @param string $updateCron
     * @return self
     */
    public function setUpdateCron(?string $updateCron): self
    {
        $this->updateCron = $updateCron;
        return $this;
    }

    /**
     * 更新方式(全量/增量)
     * @return int
     */
    public function getUpdateMode(): ?int
    {
        return $this->updateMode;
    }

    /**
     * 更新方式(全量/增量)
     * @param int $updateMode
     * @return self
     */
    public function setUpdateMode(?int $updateMode): self
    {
        $this->updateMode = $updateMode;
        return $this;
    }

    /**
     * 商品正常数量
     * @return int
     */
    public function getUpdatedCnt(): ?int
    {
        return $this->updatedCnt;
    }

    /**
     * 商品正常数量
     * @param int $updatedCnt
     * @return self
     */
    public function setUpdatedCnt(?int $updatedCnt): self
    {
        $this->updatedCnt = $updatedCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataFile !== null) {
            $result['data_file'] = $this->dataFile;
        }
        if ($this->feedStatus !== null) {
            $result['feed_status'] = $this->feedStatus;
        }
        if ($this->fileType !== null) {
            $result['file_type'] = $this->fileType;
        }
        if ($this->idxUrl !== null) {
            $result['idx_url'] = $this->idxUrl;
        }
        if ($this->lastUpdateTime !== null) {
            $result['last_update_time'] = $this->lastUpdateTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->totalCnt !== null) {
            $result['total_cnt'] = $this->totalCnt;
        }
        if ($this->updateCron !== null) {
            $result['update_cron'] = $this->updateCron;
        }
        if ($this->updateMode !== null) {
            $result['update_mode'] = $this->updateMode;
        }
        if ($this->updatedCnt !== null) {
            $result['updated_cnt'] = $this->updatedCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_file'] ?? null) !== null) {
            $obj->dataFile = (string) $v;
        }
        if (($v = $data['feed_status'] ?? null) !== null) {
            $obj->feedStatus = (int) $v;
        }
        if (($v = $data['file_type'] ?? null) !== null) {
            $obj->fileType = (string) $v;
        }
        if (($v = $data['idx_url'] ?? null) !== null) {
            $obj->idxUrl = (string) $v;
        }
        if (($v = $data['last_update_time'] ?? null) !== null) {
            $obj->lastUpdateTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (int) $v;
        }
        if (($v = $data['total_cnt'] ?? null) !== null) {
            $obj->totalCnt = (int) $v;
        }
        if (($v = $data['update_cron'] ?? null) !== null) {
            $obj->updateCron = (string) $v;
        }
        if (($v = $data['update_mode'] ?? null) !== null) {
            $obj->updateMode = (int) $v;
        }
        if (($v = $data['updated_cnt'] ?? null) !== null) {
            $obj->updatedCnt = (int) $v;
        }
        return $obj;
    }
}
