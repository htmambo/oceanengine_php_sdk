<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAssetsCreateV2RequestAppAsset implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2AppAssetAppCreateType
     */
    protected ?string $appCreateType = null;

    /**
     * 应用ID，Android应用必填
     * @var int
     */
    protected ?int $appId = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2AppAssetAppType
     */
    protected ?string $appType = null;

    /**
     * 应用下载链接，IOS、Android应用必填
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 应用名称，长度限制为125，一个字符长度为1，IOS、Android应用必填
     * @var string
     */
    protected ?string $name = null;

    /**
     * 母包ID，Android应用必填
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 应用包名，长度限制为140，IOS、Android应用必填
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2AppAssetAppCreateType
     */
    public function getAppCreateType(): ?string
    {
        return $this->appCreateType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2AppAssetAppCreateType $appCreateType
     * @return self
     */
    public function setAppCreateType(?string $appCreateType): self
    {
        $this->appCreateType = $appCreateType;
        return $this;
    }

    /**
     * 应用ID，Android应用必填
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * 应用ID，Android应用必填
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2AppAssetAppType
     */
    public function getAppType(): ?string
    {
        return $this->appType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2AppAssetAppType $appType
     * @return self
     */
    public function setAppType(?string $appType): self
    {
        $this->appType = $appType;
        return $this;
    }

    /**
     * 应用下载链接，IOS、Android应用必填
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 应用下载链接，IOS、Android应用必填
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 应用名称，长度限制为125，一个字符长度为1，IOS、Android应用必填
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 应用名称，长度限制为125，一个字符长度为1，IOS、Android应用必填
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 母包ID，Android应用必填
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 母包ID，Android应用必填
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * 应用包名，长度限制为140，IOS、Android应用必填
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * 应用包名，长度限制为140，IOS、Android应用必填
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appCreateType !== null) {
            $result['app_create_type'] = $this->appCreateType;
        }
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appType !== null) {
            $result['app_type'] = $this->appType;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_create_type'] ?? null) !== null) {
            $obj->appCreateType = (string) $v;
        }
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['app_type'] ?? null) !== null) {
            $obj->appType = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        return $obj;
    }
}
