<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceCreateV2DataFormat
     */
    protected ?string $dataFormat = null;

    /**
     * @var string
     */
    protected ?string $dataSourceName = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceCreateV2DataSourceType
     */
    protected ?string $dataSourceType = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string[]
     */
    protected ?array $filePaths = null;

    /**
     * @var \Oceanengine\Models\DmpDataSourceCreateV2FileStorageType
     */
    protected ?string $fileStorageType = null;

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
     * @return \Oceanengine\Models\DmpDataSourceCreateV2DataFormat
     */
    public function getDataFormat(): ?string
    {
        return $this->dataFormat;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceCreateV2DataFormat $dataFormat
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
    public function getDataSourceName(): ?string
    {
        return $this->dataSourceName;
    }

    /**
     * @param string $dataSourceName
     * @return self
     */
    public function setDataSourceName(?string $dataSourceName): self
    {
        $this->dataSourceName = $dataSourceName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DmpDataSourceCreateV2DataSourceType
     */
    public function getDataSourceType(): ?string
    {
        return $this->dataSourceType;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceCreateV2DataSourceType $dataSourceType
     * @return self
     */
    public function setDataSourceType(?string $dataSourceType): self
    {
        $this->dataSourceType = $dataSourceType;
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
     * @return \Oceanengine\Models\DmpDataSourceCreateV2FileStorageType
     */
    public function getFileStorageType(): ?string
    {
        return $this->fileStorageType;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceCreateV2FileStorageType $fileStorageType
     * @return self
     */
    public function setFileStorageType(?string $fileStorageType): self
    {
        $this->fileStorageType = $fileStorageType;
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
        if ($this->dataSourceName !== null) {
            $result['data_source_name'] = $this->dataSourceName;
        }
        if ($this->dataSourceType !== null) {
            $result['data_source_type'] = $this->dataSourceType;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->filePaths !== null) {
            $result['file_paths'] = $this->filePaths;
        }
        if ($this->fileStorageType !== null) {
            $result['file_storage_type'] = $this->fileStorageType;
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
        if (($v = $data['data_source_name'] ?? null) !== null) {
            $obj->dataSourceName = (string) $v;
        }
        if (($v = $data['data_source_type'] ?? null) !== null) {
            $obj->dataSourceType = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['file_paths'] ?? null) !== null && is_array($v)) {
            $obj->filePaths = $v;
        }
        if (($v = $data['file_storage_type'] ?? null) !== null) {
            $obj->fileStorageType = (string) $v;
        }
        return $obj;
    }
}
