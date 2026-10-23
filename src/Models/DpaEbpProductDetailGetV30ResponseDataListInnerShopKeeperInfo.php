<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpProductDetailGetV30ResponseDataListInnerShopKeeperInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $address = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperId = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperName = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperUrl = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperUrlAndroidApp = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperUrlIosApp = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperUrlMobile = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperUrlUniversalLink = null;

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopKeeperId(): ?string
    {
        return $this->shopKeeperId;
    }

    /**
     * @param string $shopKeeperId
     * @return self
     */
    public function setShopKeeperId(?string $shopKeeperId): self
    {
        $this->shopKeeperId = $shopKeeperId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopKeeperName(): ?string
    {
        return $this->shopKeeperName;
    }

    /**
     * @param string $shopKeeperName
     * @return self
     */
    public function setShopKeeperName(?string $shopKeeperName): self
    {
        $this->shopKeeperName = $shopKeeperName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopKeeperUrl(): ?string
    {
        return $this->shopKeeperUrl;
    }

    /**
     * @param string $shopKeeperUrl
     * @return self
     */
    public function setShopKeeperUrl(?string $shopKeeperUrl): self
    {
        $this->shopKeeperUrl = $shopKeeperUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopKeeperUrlAndroidApp(): ?string
    {
        return $this->shopKeeperUrlAndroidApp;
    }

    /**
     * @param string $shopKeeperUrlAndroidApp
     * @return self
     */
    public function setShopKeeperUrlAndroidApp(?string $shopKeeperUrlAndroidApp): self
    {
        $this->shopKeeperUrlAndroidApp = $shopKeeperUrlAndroidApp;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopKeeperUrlIosApp(): ?string
    {
        return $this->shopKeeperUrlIosApp;
    }

    /**
     * @param string $shopKeeperUrlIosApp
     * @return self
     */
    public function setShopKeeperUrlIosApp(?string $shopKeeperUrlIosApp): self
    {
        $this->shopKeeperUrlIosApp = $shopKeeperUrlIosApp;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopKeeperUrlMobile(): ?string
    {
        return $this->shopKeeperUrlMobile;
    }

    /**
     * @param string $shopKeeperUrlMobile
     * @return self
     */
    public function setShopKeeperUrlMobile(?string $shopKeeperUrlMobile): self
    {
        $this->shopKeeperUrlMobile = $shopKeeperUrlMobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopKeeperUrlUniversalLink(): ?string
    {
        return $this->shopKeeperUrlUniversalLink;
    }

    /**
     * @param string $shopKeeperUrlUniversalLink
     * @return self
     */
    public function setShopKeeperUrlUniversalLink(?string $shopKeeperUrlUniversalLink): self
    {
        $this->shopKeeperUrlUniversalLink = $shopKeeperUrlUniversalLink;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->shopKeeperId !== null) {
            $result['shop_keeper_id'] = $this->shopKeeperId;
        }
        if ($this->shopKeeperName !== null) {
            $result['shop_keeper_name'] = $this->shopKeeperName;
        }
        if ($this->shopKeeperUrl !== null) {
            $result['shop_keeper_url'] = $this->shopKeeperUrl;
        }
        if ($this->shopKeeperUrlAndroidApp !== null) {
            $result['shop_keeper_url_android_app'] = $this->shopKeeperUrlAndroidApp;
        }
        if ($this->shopKeeperUrlIosApp !== null) {
            $result['shop_keeper_url_ios_app'] = $this->shopKeeperUrlIosApp;
        }
        if ($this->shopKeeperUrlMobile !== null) {
            $result['shop_keeper_url_mobile'] = $this->shopKeeperUrlMobile;
        }
        if ($this->shopKeeperUrlUniversalLink !== null) {
            $result['shop_keeper_url_universal_link'] = $this->shopKeeperUrlUniversalLink;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['shop_keeper_id'] ?? null) !== null) {
            $obj->shopKeeperId = (string) $v;
        }
        if (($v = $data['shop_keeper_name'] ?? null) !== null) {
            $obj->shopKeeperName = (string) $v;
        }
        if (($v = $data['shop_keeper_url'] ?? null) !== null) {
            $obj->shopKeeperUrl = (string) $v;
        }
        if (($v = $data['shop_keeper_url_android_app'] ?? null) !== null) {
            $obj->shopKeeperUrlAndroidApp = (string) $v;
        }
        if (($v = $data['shop_keeper_url_ios_app'] ?? null) !== null) {
            $obj->shopKeeperUrlIosApp = (string) $v;
        }
        if (($v = $data['shop_keeper_url_mobile'] ?? null) !== null) {
            $obj->shopKeeperUrlMobile = (string) $v;
        }
        if (($v = $data['shop_keeper_url_universal_link'] ?? null) !== null) {
            $obj->shopKeeperUrlUniversalLink = (string) $v;
        }
        return $obj;
    }
}
