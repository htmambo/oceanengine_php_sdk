<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPioneerProgramAttachmentUploadV2Request implements \JsonSerializable
{
    /**
     * 即应用ID，开发者创建应用的唯一标识，可通过应用管理查看
     * @var int
     */
    protected ?int $appId = null;

    /**
     * @var \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2DataFileType
     */
    protected ?string $dataFileType = null;

    /**
     * 是否为调试模式，调试模式下数据不会被最终记录，默认为False
     * @var bool
     */
    protected ?bool $debugMode = null;

    /**
     * 文件数据，binary格式
     * @var mixed
     */
    protected $fileData = null;

    /**
     * 当前文件序号，从1开始，最大值为file_total_num
     * @var int
     */
    protected ?int $fileIndex = null;

    /**
     * p_date - platform - data_file_type维度下总文件数，如“2022-06-12”日“巨量引擎”平台的“后端投放数据”共计3份，则file_total_num为3
     * @var int
     */
    protected ?int $fileTotalNum = null;

    /**
     * 数据日期，格式为yyyy-MM-dd
     * @var string
     */
    protected ?string $pDate = null;

    /**
     * @var \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2Platform
     */
    protected ?string $platform = null;

    /**
     * 即应用ID，开发者创建应用的唯一标识，可通过应用管理查看
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * 即应用ID，开发者创建应用的唯一标识，可通过应用管理查看
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2DataFileType
     */
    public function getDataFileType(): ?string
    {
        return $this->dataFileType;
    }

    /**
     * @param \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2DataFileType $dataFileType
     * @return self
     */
    public function setDataFileType(?string $dataFileType): self
    {
        $this->dataFileType = $dataFileType;
        return $this;
    }

    /**
     * 是否为调试模式，调试模式下数据不会被最终记录，默认为False
     * @return bool
     */
    public function getDebugMode(): ?bool
    {
        return $this->debugMode;
    }

    /**
     * 是否为调试模式，调试模式下数据不会被最终记录，默认为False
     * @param bool $debugMode
     * @return self
     */
    public function setDebugMode(?bool $debugMode): self
    {
        $this->debugMode = $debugMode;
        return $this;
    }

    /**
     * 文件数据，binary格式
     * @return mixed
     */
    public function getFileData()
    {
        return $this->fileData;
    }

    /**
     * 文件数据，binary格式
     * @param mixed $fileData
     * @return self
     */
    public function setFileData($fileData): self
    {
        $this->fileData = $fileData;
        return $this;
    }

    /**
     * 当前文件序号，从1开始，最大值为file_total_num
     * @return int
     */
    public function getFileIndex(): ?int
    {
        return $this->fileIndex;
    }

    /**
     * 当前文件序号，从1开始，最大值为file_total_num
     * @param int $fileIndex
     * @return self
     */
    public function setFileIndex(?int $fileIndex): self
    {
        $this->fileIndex = $fileIndex;
        return $this;
    }

    /**
     * p_date - platform - data_file_type维度下总文件数，如“2022-06-12”日“巨量引擎”平台的“后端投放数据”共计3份，则file_total_num为3
     * @return int
     */
    public function getFileTotalNum(): ?int
    {
        return $this->fileTotalNum;
    }

    /**
     * p_date - platform - data_file_type维度下总文件数，如“2022-06-12”日“巨量引擎”平台的“后端投放数据”共计3份，则file_total_num为3
     * @param int $fileTotalNum
     * @return self
     */
    public function setFileTotalNum(?int $fileTotalNum): self
    {
        $this->fileTotalNum = $fileTotalNum;
        return $this;
    }

    /**
     * 数据日期，格式为yyyy-MM-dd
     * @return string
     */
    public function getPDate(): ?string
    {
        return $this->pDate;
    }

    /**
     * 数据日期，格式为yyyy-MM-dd
     * @param string $pDate
     * @return self
     */
    public function setPDate(?string $pDate): self
    {
        $this->pDate = $pDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2Platform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2Platform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->dataFileType !== null) {
            $result['data_file_type'] = $this->dataFileType;
        }
        if ($this->debugMode !== null) {
            $result['debug_mode'] = $this->debugMode;
        }
        if ($this->fileData !== null) {
            $result['file_data'] = $this->fileData;
        }
        if ($this->fileIndex !== null) {
            $result['file_index'] = $this->fileIndex;
        }
        if ($this->fileTotalNum !== null) {
            $result['file_total_num'] = $this->fileTotalNum;
        }
        if ($this->pDate !== null) {
            $result['p_date'] = $this->pDate;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['data_file_type'] ?? null) !== null) {
            $obj->dataFileType = (string) $v;
        }
        if (($v = $data['debug_mode'] ?? null) !== null) {
            $obj->debugMode = (bool) $v;
        }
        if (($v = $data['file_data'] ?? null) !== null) {
            $obj->fileData = $v;
        }
        if (($v = $data['file_index'] ?? null) !== null) {
            $obj->fileIndex = (int) $v;
        }
        if (($v = $data['file_total_num'] ?? null) !== null) {
            $obj->fileTotalNum = (int) $v;
        }
        if (($v = $data['p_date'] ?? null) !== null) {
            $obj->pDate = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        return $obj;
    }
}
