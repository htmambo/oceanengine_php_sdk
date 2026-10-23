<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAssetsCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2RequestAppAsset
     */
    protected ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestAppAsset $appAsset = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2AssetType
     */
    protected ?string $assetType = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2RequestMiniProgramAsset
     */
    protected ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestMiniProgramAsset $miniProgramAsset = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2RequestQuickAppAsset
     */
    protected ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestQuickAppAsset $quickAppAsset = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2RequestSiteAsset
     */
    protected ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestSiteAsset $siteAsset = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2RequestThirdPartAsset
     */
    protected ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestThirdPartAsset $thirdPartAsset = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2RequestAppAsset
     */
    public function getAppAsset(): ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestAppAsset
    {
        return $this->appAsset;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2RequestAppAsset $appAsset
     * @return self
     */
    public function setAppAsset(?\Oceanengine\Models\EventManagerAssetsCreateV2RequestAppAsset $appAsset): self
    {
        $this->appAsset = $appAsset;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2AssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2AssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2RequestMiniProgramAsset
     */
    public function getMiniProgramAsset(): ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestMiniProgramAsset
    {
        return $this->miniProgramAsset;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2RequestMiniProgramAsset $miniProgramAsset
     * @return self
     */
    public function setMiniProgramAsset(?\Oceanengine\Models\EventManagerAssetsCreateV2RequestMiniProgramAsset $miniProgramAsset): self
    {
        $this->miniProgramAsset = $miniProgramAsset;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2RequestQuickAppAsset
     */
    public function getQuickAppAsset(): ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestQuickAppAsset
    {
        return $this->quickAppAsset;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2RequestQuickAppAsset $quickAppAsset
     * @return self
     */
    public function setQuickAppAsset(?\Oceanengine\Models\EventManagerAssetsCreateV2RequestQuickAppAsset $quickAppAsset): self
    {
        $this->quickAppAsset = $quickAppAsset;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2RequestSiteAsset
     */
    public function getSiteAsset(): ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestSiteAsset
    {
        return $this->siteAsset;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2RequestSiteAsset $siteAsset
     * @return self
     */
    public function setSiteAsset(?\Oceanengine\Models\EventManagerAssetsCreateV2RequestSiteAsset $siteAsset): self
    {
        $this->siteAsset = $siteAsset;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2RequestThirdPartAsset
     */
    public function getThirdPartAsset(): ?\Oceanengine\Models\EventManagerAssetsCreateV2RequestThirdPartAsset
    {
        return $this->thirdPartAsset;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2RequestThirdPartAsset $thirdPartAsset
     * @return self
     */
    public function setThirdPartAsset(?\Oceanengine\Models\EventManagerAssetsCreateV2RequestThirdPartAsset $thirdPartAsset): self
    {
        $this->thirdPartAsset = $thirdPartAsset;
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
        if ($this->appAsset !== null) {
            $result['app_asset'] = $this->appAsset;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->miniProgramAsset !== null) {
            $result['mini_program_asset'] = $this->miniProgramAsset;
        }
        if ($this->quickAppAsset !== null) {
            $result['quick_app_asset'] = $this->quickAppAsset;
        }
        if ($this->siteAsset !== null) {
            $result['site_asset'] = $this->siteAsset;
        }
        if ($this->thirdPartAsset !== null) {
            $result['third_part_asset'] = $this->thirdPartAsset;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['app_asset'] ?? null) !== null && is_array($v)) {
            $obj->appAsset = \Oceanengine\Models\EventManagerAssetsCreateV2RequestAppAsset::fromArray($v);
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['mini_program_asset'] ?? null) !== null && is_array($v)) {
            $obj->miniProgramAsset = \Oceanengine\Models\EventManagerAssetsCreateV2RequestMiniProgramAsset::fromArray($v);
        }
        if (($v = $data['quick_app_asset'] ?? null) !== null && is_array($v)) {
            $obj->quickAppAsset = \Oceanengine\Models\EventManagerAssetsCreateV2RequestQuickAppAsset::fromArray($v);
        }
        if (($v = $data['site_asset'] ?? null) !== null && is_array($v)) {
            $obj->siteAsset = \Oceanengine\Models\EventManagerAssetsCreateV2RequestSiteAsset::fromArray($v);
        }
        if (($v = $data['third_part_asset'] ?? null) !== null && is_array($v)) {
            $obj->thirdPartAsset = \Oceanengine\Models\EventManagerAssetsCreateV2RequestThirdPartAsset::fromArray($v);
        }
        return $obj;
    }
}
