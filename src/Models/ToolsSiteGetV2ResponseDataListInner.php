<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 建站类别
     * @var string
     */
    protected ?string $functionType = null;

    /**
     * 建站名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 建站id
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteGetV2DataListSiteType
     */
    protected ?string $siteType = null;

    /**
     * 建站状态
     * @var string
     */
    protected ?string $status = null;

    /**
     * 站点缩略图
     * @var string
     */
    protected ?string $thumbnail = null;

    /**
     * 建站类别
     * @return string
     */
    public function getFunctionType(): ?string
    {
        return $this->functionType;
    }

    /**
     * 建站类别
     * @param string $functionType
     * @return self
     */
    public function setFunctionType(?string $functionType): self
    {
        $this->functionType = $functionType;
        return $this;
    }

    /**
     * 建站名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 建站名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 建站id
     * @return string
     */
    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    /**
     * 建站id
     * @param string $siteId
     * @return self
     */
    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteGetV2DataListSiteType
     */
    public function getSiteType(): ?string
    {
        return $this->siteType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteGetV2DataListSiteType $siteType
     * @return self
     */
    public function setSiteType(?string $siteType): self
    {
        $this->siteType = $siteType;
        return $this;
    }

    /**
     * 建站状态
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * 建站状态
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 站点缩略图
     * @return string
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * 站点缩略图
     * @param string $thumbnail
     * @return self
     */
    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->functionType !== null) {
            $result['function_type'] = $this->functionType;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->siteId !== null) {
            $result['siteId'] = $this->siteId;
        }
        if ($this->siteType !== null) {
            $result['siteType'] = $this->siteType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->thumbnail !== null) {
            $result['thumbnail'] = $this->thumbnail;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['function_type'] ?? null) !== null) {
            $obj->functionType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['siteId'] ?? null) !== null) {
            $obj->siteId = (string) $v;
        }
        if (($v = $data['siteType'] ?? null) !== null) {
            $obj->siteType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['thumbnail'] ?? null) !== null) {
            $obj->thumbnail = (string) $v;
        }
        return $obj;
    }
}
