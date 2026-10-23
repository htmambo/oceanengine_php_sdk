<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteHandselV2ResponseDataSuccessListInner implements \JsonSerializable
{
    /**
     * 返回转赠成功的原site_ids
     * @var string
     */
    protected ?string $originSiteId = null;

    /**
     * 转赠成功后的生成的新站点id，失败的数据无此参数返回
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * 返回转赠成功的目标广告主id
     * @var string
     */
    protected ?string $targetAdvertiserId = null;

    /**
     * 返回转赠成功的原site_ids
     * @return string
     */
    public function getOriginSiteId(): ?string
    {
        return $this->originSiteId;
    }

    /**
     * 返回转赠成功的原site_ids
     * @param string $originSiteId
     * @return self
     */
    public function setOriginSiteId(?string $originSiteId): self
    {
        $this->originSiteId = $originSiteId;
        return $this;
    }

    /**
     * 转赠成功后的生成的新站点id，失败的数据无此参数返回
     * @return string
     */
    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    /**
     * 转赠成功后的生成的新站点id，失败的数据无此参数返回
     * @param string $siteId
     * @return self
     */
    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 返回转赠成功的目标广告主id
     * @return string
     */
    public function getTargetAdvertiserId(): ?string
    {
        return $this->targetAdvertiserId;
    }

    /**
     * 返回转赠成功的目标广告主id
     * @param string $targetAdvertiserId
     * @return self
     */
    public function setTargetAdvertiserId(?string $targetAdvertiserId): self
    {
        $this->targetAdvertiserId = $targetAdvertiserId;
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
        if ($this->targetAdvertiserId !== null) {
            $result['target_advertiser_id'] = $this->targetAdvertiserId;
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
        if (($v = $data['target_advertiser_id'] ?? null) !== null) {
            $obj->targetAdvertiserId = (string) $v;
        }
        return $obj;
    }
}
