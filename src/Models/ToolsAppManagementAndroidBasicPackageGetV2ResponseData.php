<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementAndroidBasicPackageGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $categoryId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataCurrentVersion
     */
    protected ?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataCurrentVersion $currentVersion = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion
     */
    protected ?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion $nextVersion = null;

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return self
     */
    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataCurrentVersion
     */
    public function getCurrentVersion(): ?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataCurrentVersion
    {
        return $this->currentVersion;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataCurrentVersion $currentVersion
     * @return self
     */
    public function setCurrentVersion(?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataCurrentVersion $currentVersion): self
    {
        $this->currentVersion = $currentVersion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion
     */
    public function getNextVersion(): ?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion
    {
        return $this->nextVersion;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion $nextVersion
     * @return self
     */
    public function setNextVersion(?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion $nextVersion): self
    {
        $this->nextVersion = $nextVersion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->categoryId !== null) {
            $result['category_id'] = $this->categoryId;
        }
        if ($this->currentVersion !== null) {
            $result['current_version'] = $this->currentVersion;
        }
        if ($this->nextVersion !== null) {
            $result['next_version'] = $this->nextVersion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['category_id'] ?? null) !== null) {
            $obj->categoryId = (int) $v;
        }
        if (($v = $data['current_version'] ?? null) !== null && is_array($v)) {
            $obj->currentVersion = \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataCurrentVersion::fromArray($v);
        }
        if (($v = $data['next_version'] ?? null) !== null && is_array($v)) {
            $obj->nextVersion = \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion::fromArray($v);
        }
        return $obj;
    }
}
