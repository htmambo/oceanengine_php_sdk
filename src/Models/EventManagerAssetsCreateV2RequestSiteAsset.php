<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAssetsCreateV2RequestSiteAsset implements \JsonSerializable
{
    /**
     * 橙子建站站点id，橙子落地页必填
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * 橙子建站站点名称，橙子落地页必填
     * @var string
     */
    protected ?string $siteName = null;

    /**
     * 橙子建站站点id，橙子落地页必填
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * 橙子建站站点id，橙子落地页必填
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 橙子建站站点名称，橙子落地页必填
     * @return string
     */
    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    /**
     * 橙子建站站点名称，橙子落地页必填
     * @param string $siteName
     * @return self
     */
    public function setSiteName(?string $siteName): self
    {
        $this->siteName = $siteName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->siteName !== null) {
            $result['site_name'] = $this->siteName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        if (($v = $data['site_name'] ?? null) !== null) {
            $obj->siteName = (string) $v;
        }
        return $obj;
    }
}
