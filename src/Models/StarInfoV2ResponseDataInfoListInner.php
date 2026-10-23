<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarInfoV2ResponseDataInfoListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $categoryId = null;

    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * @var \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerFirstInfo
     */
    protected ?\Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerFirstInfo $firstInfo = null;

    /**
     * @var \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerSecondInfo
     */
    protected ?\Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerSecondInfo $secondInfo = null;

    /**
     * @var int
     */
    protected ?int $startId = null;

    /**
     * @var string
     */
    protected ?string $startName = null;

    /**
     * @var \Oceanengine\Models\StarInfoV2DataInfoListStatus
     */
    protected ?string $status = null;

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return self
     */
    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerFirstInfo
     */
    public function getFirstInfo(): ?\Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerFirstInfo
    {
        return $this->firstInfo;
    }

    /**
     * @param \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerFirstInfo $firstInfo
     * @return self
     */
    public function setFirstInfo(?\Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerFirstInfo $firstInfo): self
    {
        $this->firstInfo = $firstInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerSecondInfo
     */
    public function getSecondInfo(): ?\Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerSecondInfo
    {
        return $this->secondInfo;
    }

    /**
     * @param \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerSecondInfo $secondInfo
     * @return self
     */
    public function setSecondInfo(?\Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerSecondInfo $secondInfo): self
    {
        $this->secondInfo = $secondInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartId(): ?int
    {
        return $this->startId;
    }

    /**
     * @param int $startId
     * @return self
     */
    public function setStartId(?int $startId): self
    {
        $this->startId = $startId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartName(): ?string
    {
        return $this->startName;
    }

    /**
     * @param string $startName
     * @return self
     */
    public function setStartName(?string $startName): self
    {
        $this->startName = $startName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarInfoV2DataInfoListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\StarInfoV2DataInfoListStatus $status
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
        if ($this->categoryId !== null) {
            $result['category_id'] = $this->categoryId;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->firstInfo !== null) {
            $result['first_info'] = $this->firstInfo;
        }
        if ($this->secondInfo !== null) {
            $result['second_info'] = $this->secondInfo;
        }
        if ($this->startId !== null) {
            $result['start_id'] = $this->startId;
        }
        if ($this->startName !== null) {
            $result['start_name'] = $this->startName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['category_id'] ?? null) !== null) {
            $obj->categoryId = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['first_info'] ?? null) !== null && is_array($v)) {
            $obj->firstInfo = \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerFirstInfo::fromArray($v);
        }
        if (($v = $data['second_info'] ?? null) !== null && is_array($v)) {
            $obj->secondInfo = \Oceanengine\Models\StarInfoV2ResponseDataInfoListInnerSecondInfo::fromArray($v);
        }
        if (($v = $data['start_id'] ?? null) !== null) {
            $obj->startId = (int) $v;
        }
        if (($v = $data['start_name'] ?? null) !== null) {
            $obj->startName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
