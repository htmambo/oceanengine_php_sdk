<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl implements \JsonSerializable
{
    /**
     * 默认落地页
     * @var string
     */
    protected ?string $targetUrl = null;

    /**
     * 安卓落地页
     * @var string
     */
    protected ?string $targetUrlAndroidApp = null;

    /**
     * IOS落地页
     * @var string
     */
    protected ?string $targetUrlIosApp = null;

    /**
     * H5落地页
     * @var string
     */
    protected ?string $targetUrlMobile = null;

    /**
     * @var string
     */
    protected ?string $universalLink = null;

    /**
     * 默认落地页
     * @return string
     */
    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }

    /**
     * 默认落地页
     * @param string $targetUrl
     * @return self
     */
    public function setTargetUrl(?string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

    /**
     * 安卓落地页
     * @return string
     */
    public function getTargetUrlAndroidApp(): ?string
    {
        return $this->targetUrlAndroidApp;
    }

    /**
     * 安卓落地页
     * @param string $targetUrlAndroidApp
     * @return self
     */
    public function setTargetUrlAndroidApp(?string $targetUrlAndroidApp): self
    {
        $this->targetUrlAndroidApp = $targetUrlAndroidApp;
        return $this;
    }

    /**
     * IOS落地页
     * @return string
     */
    public function getTargetUrlIosApp(): ?string
    {
        return $this->targetUrlIosApp;
    }

    /**
     * IOS落地页
     * @param string $targetUrlIosApp
     * @return self
     */
    public function setTargetUrlIosApp(?string $targetUrlIosApp): self
    {
        $this->targetUrlIosApp = $targetUrlIosApp;
        return $this;
    }

    /**
     * H5落地页
     * @return string
     */
    public function getTargetUrlMobile(): ?string
    {
        return $this->targetUrlMobile;
    }

    /**
     * H5落地页
     * @param string $targetUrlMobile
     * @return self
     */
    public function setTargetUrlMobile(?string $targetUrlMobile): self
    {
        $this->targetUrlMobile = $targetUrlMobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getUniversalLink(): ?string
    {
        return $this->universalLink;
    }

    /**
     * @param string $universalLink
     * @return self
     */
    public function setUniversalLink(?string $universalLink): self
    {
        $this->universalLink = $universalLink;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->targetUrl !== null) {
            $result['target_url'] = $this->targetUrl;
        }
        if ($this->targetUrlAndroidApp !== null) {
            $result['target_url_android_app'] = $this->targetUrlAndroidApp;
        }
        if ($this->targetUrlIosApp !== null) {
            $result['target_url_ios_app'] = $this->targetUrlIosApp;
        }
        if ($this->targetUrlMobile !== null) {
            $result['target_url_mobile'] = $this->targetUrlMobile;
        }
        if ($this->universalLink !== null) {
            $result['universal_link'] = $this->universalLink;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['target_url'] ?? null) !== null) {
            $obj->targetUrl = (string) $v;
        }
        if (($v = $data['target_url_android_app'] ?? null) !== null) {
            $obj->targetUrlAndroidApp = (string) $v;
        }
        if (($v = $data['target_url_ios_app'] ?? null) !== null) {
            $obj->targetUrlIosApp = (string) $v;
        }
        if (($v = $data['target_url_mobile'] ?? null) !== null) {
            $obj->targetUrlMobile = (string) $v;
        }
        if (($v = $data['universal_link'] ?? null) !== null) {
            $obj->universalLink = (string) $v;
        }
        return $obj;
    }
}
