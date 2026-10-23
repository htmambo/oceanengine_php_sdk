<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BusinessPlatformCompanyInfoGetV30ResponseDataCompanyInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30DataCompanyInfoType
     */
    protected ?string $type = null;

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
     * @return \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30DataCompanyInfoType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30DataCompanyInfoType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
