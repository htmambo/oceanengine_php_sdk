<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceListGetV10ResponseDataAudiencesListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $audienceGroup = null;

    /**
     * @var int
     */
    protected ?int $audienceId = null;

    /**
     * @var string
     */
    protected ?string $audienceName = null;

    /**
     * @var \Oceanengine\Models\QianchuanAudienceListGetV10DataAudiencesListAudienceSource
     */
    protected ?string $audienceSource = null;

    /**
     * @var \Oceanengine\Models\QianchuanAudienceListGetV10DataAudiencesListAudienceType
     */
    protected ?string $audienceType = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $pushProduct = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var int
     */
    protected ?int $stockNum = null;

    /**
     * @var int
     */
    protected ?int $stockStatus = null;

    /**
     * @return string
     */
    public function getAudienceGroup(): ?string
    {
        return $this->audienceGroup;
    }

    /**
     * @param string $audienceGroup
     * @return self
     */
    public function setAudienceGroup(?string $audienceGroup): self
    {
        $this->audienceGroup = $audienceGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getAudienceId(): ?int
    {
        return $this->audienceId;
    }

    /**
     * @param int $audienceId
     * @return self
     */
    public function setAudienceId(?int $audienceId): self
    {
        $this->audienceId = $audienceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudienceName(): ?string
    {
        return $this->audienceName;
    }

    /**
     * @param string $audienceName
     * @return self
     */
    public function setAudienceName(?string $audienceName): self
    {
        $this->audienceName = $audienceName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAudienceListGetV10DataAudiencesListAudienceSource
     */
    public function getAudienceSource(): ?string
    {
        return $this->audienceSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAudienceListGetV10DataAudiencesListAudienceSource $audienceSource
     * @return self
     */
    public function setAudienceSource(?string $audienceSource): self
    {
        $this->audienceSource = $audienceSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAudienceListGetV10DataAudiencesListAudienceType
     */
    public function getAudienceType(): ?string
    {
        return $this->audienceType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAudienceListGetV10DataAudiencesListAudienceType $audienceType
     * @return self
     */
    public function setAudienceType(?string $audienceType): self
    {
        $this->audienceType = $audienceType;
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
    public function getPushProduct(): ?string
    {
        return $this->pushProduct;
    }

    /**
     * @param string $pushProduct
     * @return self
     */
    public function setPushProduct(?string $pushProduct): self
    {
        $this->pushProduct = $pushProduct;
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
    public function getStockNum(): ?int
    {
        return $this->stockNum;
    }

    /**
     * @param int $stockNum
     * @return self
     */
    public function setStockNum(?int $stockNum): self
    {
        $this->stockNum = $stockNum;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockStatus(): ?int
    {
        return $this->stockStatus;
    }

    /**
     * @param int $stockStatus
     * @return self
     */
    public function setStockStatus(?int $stockStatus): self
    {
        $this->stockStatus = $stockStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audienceGroup !== null) {
            $result['audience_group'] = $this->audienceGroup;
        }
        if ($this->audienceId !== null) {
            $result['audience_id'] = $this->audienceId;
        }
        if ($this->audienceName !== null) {
            $result['audience_name'] = $this->audienceName;
        }
        if ($this->audienceSource !== null) {
            $result['audience_source'] = $this->audienceSource;
        }
        if ($this->audienceType !== null) {
            $result['audience_type'] = $this->audienceType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->pushProduct !== null) {
            $result['push_product'] = $this->pushProduct;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->stockNum !== null) {
            $result['stock_num'] = $this->stockNum;
        }
        if ($this->stockStatus !== null) {
            $result['stock_status'] = $this->stockStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_group'] ?? null) !== null) {
            $obj->audienceGroup = (string) $v;
        }
        if (($v = $data['audience_id'] ?? null) !== null) {
            $obj->audienceId = (int) $v;
        }
        if (($v = $data['audience_name'] ?? null) !== null) {
            $obj->audienceName = (string) $v;
        }
        if (($v = $data['audience_source'] ?? null) !== null) {
            $obj->audienceSource = (string) $v;
        }
        if (($v = $data['audience_type'] ?? null) !== null) {
            $obj->audienceType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['push_product'] ?? null) !== null) {
            $obj->pushProduct = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['stock_num'] ?? null) !== null) {
            $obj->stockNum = (int) $v;
        }
        if (($v = $data['stock_status'] ?? null) !== null) {
            $obj->stockStatus = (int) $v;
        }
        return $obj;
    }
}
