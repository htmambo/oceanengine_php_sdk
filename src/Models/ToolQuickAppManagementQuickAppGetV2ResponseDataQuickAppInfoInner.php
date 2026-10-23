<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolQuickAppManagementQuickAppGetV2ResponseDataQuickAppInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration
     */
    protected ?string $assetGeneration = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $homepageUrl = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * @var \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @return \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration
     */
    public function getAssetGeneration(): ?string
    {
        return $this->assetGeneration;
    }

    /**
     * @param \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoAssetGeneration $assetGeneration
     * @return self
     */
    public function setAssetGeneration(?string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomepageUrl(): ?string
    {
        return $this->homepageUrl;
    }

    /**
     * @param string $homepageUrl
     * @return self
     */
    public function setHomepageUrl(?string $homepageUrl): self
    {
        $this->homepageUrl = $homepageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus $status
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
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetGeneration !== null) {
            $result['asset_generation'] = $this->assetGeneration;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->homepageUrl !== null) {
            $result['homepage_url'] = $this->homepageUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_generation'] ?? null) !== null) {
            $obj->assetGeneration = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['homepage_url'] ?? null) !== null) {
            $obj->homepageUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        return $obj;
    }
}
