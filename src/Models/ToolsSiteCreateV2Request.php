<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInner[]
     */
    protected ?array $bricks = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2SiteType
     */
    protected ?string $siteType = null;

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
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInner[]
     */
    public function getBricks(): ?array
    {
        return $this->bricks;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInner[] $bricks
     * @return self
     */
    public function setBricks(?array $bricks): self
    {
        $this->bricks = $bricks;
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
     * @return \Oceanengine\Models\ToolsSiteCreateV2SiteType
     */
    public function getSiteType(): ?string
    {
        return $this->siteType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2SiteType $siteType
     * @return self
     */
    public function setSiteType(?string $siteType): self
    {
        $this->siteType = $siteType;
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
        if ($this->bricks !== null) {
            $result['bricks'] = $this->bricks;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->siteType !== null) {
            $result['site_type'] = $this->siteType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['bricks'] ?? null) !== null && is_array($v)) {
            $obj->bricks = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['site_type'] ?? null) !== null) {
            $obj->siteType = (string) $v;
        }
        return $obj;
    }
}
