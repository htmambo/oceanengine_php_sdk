<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCopyV2ResponseDataSuccessListInner implements \JsonSerializable
{
    /**
     * 返回复制成功的原站点id
     * @var string
     */
    protected ?string $originSiteId = null;

    /**
     * 返回复制成功后生成的新站点id
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * 返回复制成功的原站点id
     * @return string
     */
    public function getOriginSiteId(): ?string
    {
        return $this->originSiteId;
    }

    /**
     * 返回复制成功的原站点id
     * @param string $originSiteId
     * @return self
     */
    public function setOriginSiteId(?string $originSiteId): self
    {
        $this->originSiteId = $originSiteId;
        return $this;
    }

    /**
     * 返回复制成功后生成的新站点id
     * @return string
     */
    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    /**
     * 返回复制成功后生成的新站点id
     * @param string $siteId
     * @return self
     */
    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->originSiteId !== null) {
            $result['origin_site_id'] = $this->originSiteId;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['origin_site_id'] ?? null) !== null) {
            $obj->originSiteId = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (string) $v;
        }
        return $obj;
    }
}
