<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpCustomAudienceSelectV2ResponseDataCustomAudienceListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $coverNum = null;

    /**
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * @var string
     */
    protected ?string $dataSourceId = null;

    /**
     * @var \Oceanengine\Models\DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus
     */
    protected ?string $deliveryStatus = null;

    /**
     * @var int
     */
    protected ?int $isdel = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\DmpCustomAudienceSelectV2DataCustomAudienceListSource
     */
    protected ?string $source = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var string
     */
    protected ?string $tag = null;

    /**
     * @var int
     */
    protected ?int $uploadNum = null;

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
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * @param int $customAudienceId
     * @return self
     */
    public function setCustomAudienceId(?int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
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
     * @return \Oceanengine\Models\DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus
     */
    public function getDeliveryStatus(): ?string
    {
        return $this->deliveryStatus;
    }

    /**
     * @param \Oceanengine\Models\DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus $deliveryStatus
     * @return self
     */
    public function setDeliveryStatus(?string $deliveryStatus): self
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsdel(): ?int
    {
        return $this->isdel;
    }

    /**
     * @param int $isdel
     * @return self
     */
    public function setIsdel(?int $isdel): self
    {
        $this->isdel = $isdel;
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
     * @return \Oceanengine\Models\DmpCustomAudienceSelectV2DataCustomAudienceListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\DmpCustomAudienceSelectV2DataCustomAudienceListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
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
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return self
     */
    public function setTag(?string $tag): self
    {
        $this->tag = $tag;
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
        if ($this->coverNum !== null) {
            $result['cover_num'] = $this->coverNum;
        }
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        if ($this->dataSourceId !== null) {
            $result['data_source_id'] = $this->dataSourceId;
        }
        if ($this->deliveryStatus !== null) {
            $result['delivery_status'] = $this->deliveryStatus;
        }
        if ($this->isdel !== null) {
            $result['isdel'] = $this->isdel;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->tag !== null) {
            $result['tag'] = $this->tag;
        }
        if ($this->uploadNum !== null) {
            $result['upload_num'] = $this->uploadNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_num'] ?? null) !== null) {
            $obj->coverNum = (int) $v;
        }
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        if (($v = $data['data_source_id'] ?? null) !== null) {
            $obj->dataSourceId = (string) $v;
        }
        if (($v = $data['delivery_status'] ?? null) !== null) {
            $obj->deliveryStatus = (string) $v;
        }
        if (($v = $data['isdel'] ?? null) !== null) {
            $obj->isdel = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['tag'] ?? null) !== null) {
            $obj->tag = (string) $v;
        }
        if (($v = $data['upload_num'] ?? null) !== null) {
            $obj->uploadNum = (int) $v;
        }
        return $obj;
    }
}
