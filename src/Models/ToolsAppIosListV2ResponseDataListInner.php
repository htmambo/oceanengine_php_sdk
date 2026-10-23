<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppIosListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var string
     */
    protected ?string $iconUrl = null;

    /**
     * @var int
     */
    protected ?int $itunesId = null;

    /**
     * @var int
     */
    protected ?int $packageId = null;

    /**
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var \Oceanengine\Models\ToolsAppIosListV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $version = null;

    /**
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): ?string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return self
     */
    public function setIconUrl(?string $iconUrl): self
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getItunesId(): ?int
    {
        return $this->itunesId;
    }

    /**
     * @param int $itunesId
     * @return self
     */
    public function setItunesId(?int $itunesId): self
    {
        $this->itunesId = $itunesId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageId(): ?int
    {
        return $this->packageId;
    }

    /**
     * @param int $packageId
     * @return self
     */
    public function setPackageId(?int $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppIosListV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppIosListV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;
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
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->iconUrl !== null) {
            $result['icon_url'] = $this->iconUrl;
        }
        if ($this->itunesId !== null) {
            $result['itunes_id'] = $this->itunesId;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['icon_url'] ?? null) !== null) {
            $obj->iconUrl = (string) $v;
        }
        if (($v = $data['itunes_id'] ?? null) !== null) {
            $obj->itunesId = (int) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (int) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
