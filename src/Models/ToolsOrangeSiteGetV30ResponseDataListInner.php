<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsOrangeSiteGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30DataListConsultSiteType[]
     */
    protected ?array $consultSiteType = null;

    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30DataListFunctionType
     */
    protected ?string $functionType = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30DataListSiteType
     */
    protected ?string $siteType = null;

    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $thumbnail = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30DataListConsultSiteType[]
     */
    public function getConsultSiteType(): ?array
    {
        return $this->consultSiteType;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30DataListConsultSiteType[] $consultSiteType
     * @return self
     */
    public function setConsultSiteType(?array $consultSiteType): self
    {
        $this->consultSiteType = $consultSiteType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30DataListFunctionType
     */
    public function getFunctionType(): ?string
    {
        return $this->functionType;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30DataListFunctionType $functionType
     * @return self
     */
    public function setFunctionType(?string $functionType): self
    {
        $this->functionType = $functionType;
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
     * @return string
     */
    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    /**
     * @param string $siteId
     * @return self
     */
    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30DataListSiteType
     */
    public function getSiteType(): ?string
    {
        return $this->siteType;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30DataListSiteType $siteType
     * @return self
     */
    public function setSiteType(?string $siteType): self
    {
        $this->siteType = $siteType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return self
     */
    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->consultSiteType !== null) {
            $result['consult_site_type'] = $this->consultSiteType;
        }
        if ($this->functionType !== null) {
            $result['function_type'] = $this->functionType;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->siteType !== null) {
            $result['site_type'] = $this->siteType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->thumbnail !== null) {
            $result['thumbnail'] = $this->thumbnail;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['consult_site_type'] ?? null) !== null && is_array($v)) {
            $obj->consultSiteType = $v;
        }
        if (($v = $data['function_type'] ?? null) !== null) {
            $obj->functionType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (string) $v;
        }
        if (($v = $data['site_type'] ?? null) !== null) {
            $obj->siteType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['thumbnail'] ?? null) !== null) {
            $obj->thumbnail = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
