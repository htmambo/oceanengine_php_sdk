<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp implements \JsonSerializable
{
    /**
     * 应用名称
     * @var string
     */
    protected ?string $appName = null;

    /**
     * 应用类型
     * @var int
     */
    protected ?int $appType = null;

    /**
     * 软件简介
     * @var string
     */
    protected ?string $desc = null;

    /**
     * 下载开始时间
     * @var int
     */
    protected ?int $downloadStartTime = null;

    /**
     * 下载链接
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 应用名
     * @var string
     */
    protected ?string $package = null;

    /**
     * 应用下载详情页
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * 是否下载意图
     * @var bool
     */
    protected ?bool $webUrlIsDownload = null;

    /**
     * 应用名称
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 应用名称
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * 应用类型
     * @return int
     */
    public function getAppType(): ?int
    {
        return $this->appType;
    }

    /**
     * 应用类型
     * @param int $appType
     * @return self
     */
    public function setAppType(?int $appType): self
    {
        $this->appType = $appType;
        return $this;
    }

    /**
     * 软件简介
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * 软件简介
     * @param string $desc
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * 下载开始时间
     * @return int
     */
    public function getDownloadStartTime(): ?int
    {
        return $this->downloadStartTime;
    }

    /**
     * 下载开始时间
     * @param int $downloadStartTime
     * @return self
     */
    public function setDownloadStartTime(?int $downloadStartTime): self
    {
        $this->downloadStartTime = $downloadStartTime;
        return $this;
    }

    /**
     * 下载链接
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 下载链接
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 应用名
     * @return string
     */
    public function getPackage(): ?string
    {
        return $this->package;
    }

    /**
     * 应用名
     * @param string $package
     * @return self
     */
    public function setPackage(?string $package): self
    {
        $this->package = $package;
        return $this;
    }

    /**
     * 应用下载详情页
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * 应用下载详情页
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * 是否下载意图
     * @return bool
     */
    public function getWebUrlIsDownload(): ?bool
    {
        return $this->webUrlIsDownload;
    }

    /**
     * 是否下载意图
     * @param bool $webUrlIsDownload
     * @return self
     */
    public function setWebUrlIsDownload(?bool $webUrlIsDownload): self
    {
        $this->webUrlIsDownload = $webUrlIsDownload;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->appType !== null) {
            $result['app_type'] = $this->appType;
        }
        if ($this->desc !== null) {
            $result['desc'] = $this->desc;
        }
        if ($this->downloadStartTime !== null) {
            $result['download_start_time'] = $this->downloadStartTime;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->package !== null) {
            $result['package'] = $this->package;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        if ($this->webUrlIsDownload !== null) {
            $result['web_url_is_download'] = $this->webUrlIsDownload;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['app_type'] ?? null) !== null) {
            $obj->appType = (int) $v;
        }
        if (($v = $data['desc'] ?? null) !== null) {
            $obj->desc = (string) $v;
        }
        if (($v = $data['download_start_time'] ?? null) !== null) {
            $obj->downloadStartTime = (int) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['package'] ?? null) !== null) {
            $obj->package = (string) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        if (($v = $data['web_url_is_download'] ?? null) !== null) {
            $obj->webUrlIsDownload = (bool) $v;
        }
        return $obj;
    }
}
