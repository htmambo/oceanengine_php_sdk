<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var int
     */
    protected ?int $externalUrlIsDownload = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo $microAppInfo = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType
     */
    protected ?string $microAppOpenUrlType = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo $wechatMicroAppInfo = null;

    /**
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getExternalUrlIsDownload(): ?int
    {
        return $this->externalUrlIsDownload;
    }

    /**
     * @param int $externalUrlIsDownload
     * @return self
     */
    public function setExternalUrlIsDownload(?int $externalUrlIsDownload): self
    {
        $this->externalUrlIsDownload = $externalUrlIsDownload;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo
     */
    public function getMicroAppInfo(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo
    {
        return $this->microAppInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo $microAppInfo
     * @return self
     */
    public function setMicroAppInfo(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo $microAppInfo): self
    {
        $this->microAppInfo = $microAppInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType
     */
    public function getMicroAppOpenUrlType(): ?string
    {
        return $this->microAppOpenUrlType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType $microAppOpenUrlType
     * @return self
     */
    public function setMicroAppOpenUrlType(?string $microAppOpenUrlType): self
    {
        $this->microAppOpenUrlType = $microAppOpenUrlType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo
     */
    public function getWechatMicroAppInfo(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo
    {
        return $this->wechatMicroAppInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo $wechatMicroAppInfo
     * @return self
     */
    public function setWechatMicroAppInfo(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo $wechatMicroAppInfo): self
    {
        $this->wechatMicroAppInfo = $wechatMicroAppInfo;
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
        if ($this->externalUrlIsDownload !== null) {
            $result['external_url_is_download'] = $this->externalUrlIsDownload;
        }
        if ($this->microAppInfo !== null) {
            $result['micro_app_info'] = $this->microAppInfo;
        }
        if ($this->microAppOpenUrlType !== null) {
            $result['micro_app_open_url_type'] = $this->microAppOpenUrlType;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->wechatMicroAppInfo !== null) {
            $result['wechat_micro_app_info'] = $this->wechatMicroAppInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['external_url_is_download'] ?? null) !== null) {
            $obj->externalUrlIsDownload = (int) $v;
        }
        if (($v = $data['micro_app_info'] ?? null) !== null && is_array($v)) {
            $obj->microAppInfo = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo::fromArray($v);
        }
        if (($v = $data['micro_app_open_url_type'] ?? null) !== null) {
            $obj->microAppOpenUrlType = (string) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['wechat_micro_app_info'] ?? null) !== null && is_array($v)) {
            $obj->wechatMicroAppInfo = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo::fromArray($v);
        }
        return $obj;
    }
}
