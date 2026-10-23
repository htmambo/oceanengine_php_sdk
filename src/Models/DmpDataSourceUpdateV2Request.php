<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceUpdateV2DataFormat
     */
    protected ?string $dataFormat = null;

    /**
     * @var string
     */
    protected ?string $dataSourceId = null;

    /**
     * @var string[]
     */
    protected ?array $filePaths = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceUpdateV2FileStorageType
     */
    protected ?string $fileStorageType = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceUpdateV2OperationType
     */
    protected ?string $operationType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpDataSourceUpdateV2DataFormat
     */
    public function getDataFormat(): ?string
    {
        return $this->dataFormat;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceUpdateV2DataFormat $dataFormat
     * @return self
     */
    public function setDataFormat(?string $dataFormat): self
    {
        $this->dataFormat = $dataFormat;
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
     * @return string[]
     */
    public function getFilePaths(): ?array
    {
        return $this->filePaths;
    }

    /**
     * @param string[] $filePaths
     * @return self
     */
    public function setFilePaths(?array $filePaths): self
    {
        $this->filePaths = $filePaths;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpDataSourceUpdateV2FileStorageType
     */
    public function getFileStorageType(): ?string
    {
        return $this->fileStorageType;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceUpdateV2FileStorageType $fileStorageType
     * @return self
     */
    public function setFileStorageType(?string $fileStorageType): self
    {
        $this->fileStorageType = $fileStorageType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpDataSourceUpdateV2OperationType
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceUpdateV2OperationType $operationType
     * @return self
     */
    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->dataFormat !== null) {
            $result['data_format'] = $this->dataFormat;
        }
        if ($this->dataSourceId !== null) {
            $result['data_source_id'] = $this->dataSourceId;
        }
        if ($this->filePaths !== null) {
            $result['file_paths'] = $this->filePaths;
        }
        if ($this->fileStorageType !== null) {
            $result['file_storage_type'] = $this->fileStorageType;
        }
        if ($this->operationType !== null) {
            $result['operation_type'] = $this->operationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['data_format'] ?? null) !== null) {
            $obj->dataFormat = (string) $v;
        }
        if (($v = $data['data_source_id'] ?? null) !== null) {
            $obj->dataSourceId = (string) $v;
        }
        if (($v = $data['file_paths'] ?? null) !== null && is_array($v)) {
            $obj->filePaths = $v;
        }
        if (($v = $data['file_storage_type'] ?? null) !== null) {
            $obj->fileStorageType = (string) $v;
        }
        if (($v = $data['operation_type'] ?? null) !== null) {
            $obj->operationType = (string) $v;
        }
        return $obj;
    }
}
