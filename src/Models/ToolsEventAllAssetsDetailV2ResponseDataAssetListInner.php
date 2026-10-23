<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAllAssetsDetailV2ResponseDataAssetListInner implements \JsonSerializable
{
    /**
     * 应用ID，当asset_type = APP 时返回
     * @var int
     */
    protected ?int $appId = null;

    /**
     * 应用名称，当asset_type = APP 时返回
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAllAssetsDetailV2DataAssetListAppType
     */
    protected ?string $appType = null;

    /**
     * 资产id，所有资产均会返回
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 资产名称，所有资产均会返回
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAllAssetsDetailV2DataAssetListAssetType
     */
    protected ?string $assetType = null;

    /**
     * 应用下载链接，当asset_type = APP 时返回
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 小程序appid，当asset_type = MINI_PROGRAME 时返回
     * @var string
     */
    protected ?string $microAppId = null;

    /**
     * 小程序资产id，当asset_type = MINI_PROGRAME 时返回
     * @var int
     */
    protected ?int $microAppInstanceId = null;

    /**
     * 应用包id，当asset_type = APP 时返回，当调用API创建资产时，Android应用必填，建议获取保存
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 应用包名，当asset_type = APP 时返回
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * 快应用id，当asset_type = QUICK_APP 时返回
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * 快应用包名，当asset_type = QUICK_APP 时返回
     * @var string
     */
    protected ?string $quickAppPackageName = null;

    /**
     * 橙子落地页站点id，当asset_type = TETRIS_EXTERNAL 时返回，表示该资产是基于哪一个橙子落地页站点创建的，在巨量广告-事件资产页面，橙子落地页显示为该站点id
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * 应用ID，当asset_type = APP 时返回
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * 应用ID，当asset_type = APP 时返回
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 应用名称，当asset_type = APP 时返回
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 应用名称，当asset_type = APP 时返回
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAllAssetsDetailV2DataAssetListAppType
     */
    public function getAppType(): ?string
    {
        return $this->appType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAllAssetsDetailV2DataAssetListAppType $appType
     * @return self
     */
    public function setAppType(?string $appType): self
    {
        $this->appType = $appType;
        return $this;
    }

    /**
     * 资产id，所有资产均会返回
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 资产id，所有资产均会返回
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 资产名称，所有资产均会返回
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 资产名称，所有资产均会返回
     * @param string $assetName
     * @return self
     */
    public function setAssetName(?string $assetName): self
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAllAssetsDetailV2DataAssetListAssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAllAssetsDetailV2DataAssetListAssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * 应用下载链接，当asset_type = APP 时返回
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 应用下载链接，当asset_type = APP 时返回
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 小程序appid，当asset_type = MINI_PROGRAME 时返回
     * @return string
     */
    public function getMicroAppId(): ?string
    {
        return $this->microAppId;
    }

    /**
     * 小程序appid，当asset_type = MINI_PROGRAME 时返回
     * @param string $microAppId
     * @return self
     */
    public function setMicroAppId(?string $microAppId): self
    {
        $this->microAppId = $microAppId;
        return $this;
    }

    /**
     * 小程序资产id，当asset_type = MINI_PROGRAME 时返回
     * @return int
     */
    public function getMicroAppInstanceId(): ?int
    {
        return $this->microAppInstanceId;
    }

    /**
     * 小程序资产id，当asset_type = MINI_PROGRAME 时返回
     * @param int $microAppInstanceId
     * @return self
     */
    public function setMicroAppInstanceId(?int $microAppInstanceId): self
    {
        $this->microAppInstanceId = $microAppInstanceId;
        return $this;
    }

    /**
     * 应用包id，当asset_type = APP 时返回，当调用API创建资产时，Android应用必填，建议获取保存
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 应用包id，当asset_type = APP 时返回，当调用API创建资产时，Android应用必填，建议获取保存
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * 应用包名，当asset_type = APP 时返回
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * 应用包名，当asset_type = APP 时返回
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * 快应用id，当asset_type = QUICK_APP 时返回
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * 快应用id，当asset_type = QUICK_APP 时返回
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * 快应用包名，当asset_type = QUICK_APP 时返回
     * @return string
     */
    public function getQuickAppPackageName(): ?string
    {
        return $this->quickAppPackageName;
    }

    /**
     * 快应用包名，当asset_type = QUICK_APP 时返回
     * @param string $quickAppPackageName
     * @return self
     */
    public function setQuickAppPackageName(?string $quickAppPackageName): self
    {
        $this->quickAppPackageName = $quickAppPackageName;
        return $this;
    }

    /**
     * 橙子落地页站点id，当asset_type = TETRIS_EXTERNAL 时返回，表示该资产是基于哪一个橙子落地页站点创建的，在巨量广告-事件资产页面，橙子落地页显示为该站点id
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * 橙子落地页站点id，当asset_type = TETRIS_EXTERNAL 时返回，表示该资产是基于哪一个橙子落地页站点创建的，在巨量广告-事件资产页面，橙子落地页显示为该站点id
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->appType !== null) {
            $result['app_type'] = $this->appType;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->microAppId !== null) {
            $result['micro_app_id'] = $this->microAppId;
        }
        if ($this->microAppInstanceId !== null) {
            $result['micro_app_instance_id'] = $this->microAppInstanceId;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
        }
        if ($this->quickAppPackageName !== null) {
            $result['quick_app_package_name'] = $this->quickAppPackageName;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['app_type'] ?? null) !== null) {
            $obj->appType = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['micro_app_id'] ?? null) !== null) {
            $obj->microAppId = (string) $v;
        }
        if (($v = $data['micro_app_instance_id'] ?? null) !== null) {
            $obj->microAppInstanceId = (int) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        if (($v = $data['quick_app_package_name'] ?? null) !== null) {
            $obj->quickAppPackageName = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        return $obj;
    }
}
