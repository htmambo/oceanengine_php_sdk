<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal implements \JsonSerializable
{
    /**
     * 链接地址
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * 使用下载类型链接地址
     * @var int
     */
    protected ?int $externalUrlIsDownload = null;

    /**
     * 直达链接
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 链接地址
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 链接地址
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * 使用下载类型链接地址
     * @return int
     */
    public function getExternalUrlIsDownload(): ?int
    {
        return $this->externalUrlIsDownload;
    }

    /**
     * 使用下载类型链接地址
     * @param int $externalUrlIsDownload
     * @return self
     */
    public function setExternalUrlIsDownload(?int $externalUrlIsDownload): self
    {
        $this->externalUrlIsDownload = $externalUrlIsDownload;
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
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
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
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        return $obj;
    }
}
