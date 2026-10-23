<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30Request implements \JsonSerializable
{
    /**
     * 客户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialList
     */
    protected ?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialList $materialList = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialSwitch
     */
    protected ?string $materialSwitch = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle
     */
    protected ?string $originalVideoTitle = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 客户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 客户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialList
     */
    public function getMaterialList(): ?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialList
    {
        return $this->materialList;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialList $materialList
     * @return self
     */
    public function setMaterialList(?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialList $materialList): self
    {
        $this->materialList = $materialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialSwitch
     */
    public function getMaterialSwitch(): ?string
    {
        return $this->materialSwitch;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialSwitch $materialSwitch
     * @return self
     */
    public function setMaterialSwitch(?string $materialSwitch): self
    {
        $this->materialSwitch = $materialSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle
     */
    public function getOriginalVideoTitle(): ?string
    {
        return $this->originalVideoTitle;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle $originalVideoTitle
     * @return self
     */
    public function setOriginalVideoTitle(?string $originalVideoTitle): self
    {
        $this->originalVideoTitle = $originalVideoTitle;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->materialList !== null) {
            $result['material_list'] = $this->materialList;
        }
        if ($this->materialSwitch !== null) {
            $result['material_switch'] = $this->materialSwitch;
        }
        if ($this->originalVideoTitle !== null) {
            $result['original_video_title'] = $this->originalVideoTitle;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['material_list'] ?? null) !== null && is_array($v)) {
            $obj->materialList = \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialList::fromArray($v);
        }
        if (($v = $data['material_switch'] ?? null) !== null) {
            $obj->materialSwitch = (string) $v;
        }
        if (($v = $data['original_video_title'] ?? null) !== null) {
            $obj->originalVideoTitle = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
