<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaDetailGetV2ResponseDataListInnerLandingInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $targetUrl = null;

    /**
     * @var string
     */
    protected ?string $targetUrlAndroidApp = null;

    /**
     * @var string
     */
    protected ?string $targetUrlIosApp = null;

    /**
     * @var string
     */
    protected ?string $targetUrlMobile = null;

    /**
     * @var string
     */
    protected ?string $targetUrlUniversalLink = null;

    /**
     * @return string
     */
    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     * @return self
     */
    public function setTargetUrl(?string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrlAndroidApp(): ?string
    {
        return $this->targetUrlAndroidApp;
    }

    /**
     * @param string $targetUrlAndroidApp
     * @return self
     */
    public function setTargetUrlAndroidApp(?string $targetUrlAndroidApp): self
    {
        $this->targetUrlAndroidApp = $targetUrlAndroidApp;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrlIosApp(): ?string
    {
        return $this->targetUrlIosApp;
    }

    /**
     * @param string $targetUrlIosApp
     * @return self
     */
    public function setTargetUrlIosApp(?string $targetUrlIosApp): self
    {
        $this->targetUrlIosApp = $targetUrlIosApp;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrlMobile(): ?string
    {
        return $this->targetUrlMobile;
    }

    /**
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
    public function getTargetUrlUniversalLink(): ?string
    {
        return $this->targetUrlUniversalLink;
    }

    /**
     * @param string $targetUrlUniversalLink
     * @return self
     */
    public function setTargetUrlUniversalLink(?string $targetUrlUniversalLink): self
    {
        $this->targetUrlUniversalLink = $targetUrlUniversalLink;
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
        if ($this->targetUrlUniversalLink !== null) {
            $result['target_url_universal_link'] = $this->targetUrlUniversalLink;
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
        if (($v = $data['target_url_universal_link'] ?? null) !== null) {
            $obj->targetUrlUniversalLink = (string) $v;
        }
        return $obj;
    }
}
