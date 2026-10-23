<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo implements \JsonSerializable
{
    /**
     * 落地页链接
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * 小程序链接
     * @var string
     */
    protected ?string $microAppInfo = null;

    /**
     * 直达链接
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 直达文案
     * @var string
     */
    protected ?string $openUrlText = null;

    /**
     * 落地页链接
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 落地页链接
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * 小程序链接
     * @return string
     */
    public function getMicroAppInfo(): ?string
    {
        return $this->microAppInfo;
    }

    /**
     * 小程序链接
     * @param string $microAppInfo
     * @return self
     */
    public function setMicroAppInfo(?string $microAppInfo): self
    {
        $this->microAppInfo = $microAppInfo;
        return $this;
    }

    /**
     * 直达链接
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * 直达链接
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * 直达文案
     * @return string
     */
    public function getOpenUrlText(): ?string
    {
        return $this->openUrlText;
    }

    /**
     * 直达文案
     * @param string $openUrlText
     * @return self
     */
    public function setOpenUrlText(?string $openUrlText): self
    {
        $this->openUrlText = $openUrlText;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->microAppInfo !== null) {
            $result['micro_app_info'] = $this->microAppInfo;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->openUrlText !== null) {
            $result['open_url_text'] = $this->openUrlText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['micro_app_info'] ?? null) !== null) {
            $obj->microAppInfo = (string) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['open_url_text'] ?? null) !== null) {
            $obj->openUrlText = (string) $v;
        }
        return $obj;
    }
}
