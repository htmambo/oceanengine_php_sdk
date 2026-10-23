<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo implements \JsonSerializable
{
    /**
     * 商户地址
     * @var string
     */
    protected ?string $address = null;

    /**
     * 联系人
     * @var string
     */
    protected ?string $contact = null;

    /**
     * 商家Logo
     * @var string
     */
    protected ?string $logo = null;

    /**
     * 客服电话
     * @var string
     */
    protected ?string $servicePhone = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperId = null;

    /**
     * @var string
     */
    protected ?string $shopKeeperName = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfoTargetUrl
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfoTargetUrl $targetUrl = null;

    /**
     * 商户地址
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * 商户地址
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * 联系人
     * @return string
     */
    public function getContact(): ?string
    {
        return $this->contact;
    }

    /**
     * 联系人
     * @param string $contact
     * @return self
     */
    public function setContact(?string $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * 商家Logo
     * @return string
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * 商家Logo
     * @param string $logo
     * @return self
     */
    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * 客服电话
     * @return string
     */
    public function getServicePhone(): ?string
    {
        return $this->servicePhone;
    }

    /**
     * 客服电话
     * @param string $servicePhone
     * @return self
     */
    public function setServicePhone(?string $servicePhone): self
    {
        $this->servicePhone = $servicePhone;
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
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfoTargetUrl
     */
    public function getTargetUrl(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfoTargetUrl
    {
        return $this->targetUrl;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfoTargetUrl $targetUrl
     * @return self
     */
    public function setTargetUrl(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfoTargetUrl $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
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
        if ($this->contact !== null) {
            $result['contact'] = $this->contact;
        }
        if ($this->logo !== null) {
            $result['logo'] = $this->logo;
        }
        if ($this->servicePhone !== null) {
            $result['service_phone'] = $this->servicePhone;
        }
        if ($this->shopKeeperId !== null) {
            $result['shop_keeper_id'] = $this->shopKeeperId;
        }
        if ($this->shopKeeperName !== null) {
            $result['shop_keeper_name'] = $this->shopKeeperName;
        }
        if ($this->targetUrl !== null) {
            $result['target_url'] = $this->targetUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['contact'] ?? null) !== null) {
            $obj->contact = (string) $v;
        }
        if (($v = $data['logo'] ?? null) !== null) {
            $obj->logo = (string) $v;
        }
        if (($v = $data['service_phone'] ?? null) !== null) {
            $obj->servicePhone = (string) $v;
        }
        if (($v = $data['shop_keeper_id'] ?? null) !== null) {
            $obj->shopKeeperId = (string) $v;
        }
        if (($v = $data['shop_keeper_name'] ?? null) !== null) {
            $obj->shopKeeperName = (string) $v;
        }
        if (($v = $data['target_url'] ?? null) !== null && is_array($v)) {
            $obj->targetUrl = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfoTargetUrl::fromArray($v);
        }
        return $obj;
    }
}
