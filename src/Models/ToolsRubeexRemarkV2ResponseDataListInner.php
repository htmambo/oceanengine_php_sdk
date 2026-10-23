<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRubeexRemarkV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * data_md5指rubeex工具产出的试玩素材作品版本，一个rubeex试玩素材可能有多个作品版本
     * @var string
     */
    protected ?string $dataMd5 = null;

    /**
     * 作品id即试玩素材id，属于试玩素材唯一标识
     * @var float
     */
    protected ?float $projectId = null;

    /**
     * 场景
     * @var string
     */
    protected ?string $section = null;

    /**
     * 区域
     * @var string
     */
    protected ?string $sectionArea = null;

    /**
     * 区域名称
     * @var string
     */
    protected ?string $sectionAreaRemark = null;

    /**
     * 场景名称
     * @var string
     */
    protected ?string $sectionRemark = null;

    /**
     * data_md5指rubeex工具产出的试玩素材作品版本，一个rubeex试玩素材可能有多个作品版本
     * @return string
     */
    public function getDataMd5(): ?string
    {
        return $this->dataMd5;
    }

    /**
     * data_md5指rubeex工具产出的试玩素材作品版本，一个rubeex试玩素材可能有多个作品版本
     * @param string $dataMd5
     * @return self
     */
    public function setDataMd5(?string $dataMd5): self
    {
        $this->dataMd5 = $dataMd5;
        return $this;
    }

    /**
     * 作品id即试玩素材id，属于试玩素材唯一标识
     * @return float
     */
    public function getProjectId(): ?float
    {
        return $this->projectId;
    }

    /**
     * 作品id即试玩素材id，属于试玩素材唯一标识
     * @param float $projectId
     * @return self
     */
    public function setProjectId(?float $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 场景
     * @return string
     */
    public function getSection(): ?string
    {
        return $this->section;
    }

    /**
     * 场景
     * @param string $section
     * @return self
     */
    public function setSection(?string $section): self
    {
        $this->section = $section;
        return $this;
    }

    /**
     * 区域
     * @return string
     */
    public function getSectionArea(): ?string
    {
        return $this->sectionArea;
    }

    /**
     * 区域
     * @param string $sectionArea
     * @return self
     */
    public function setSectionArea(?string $sectionArea): self
    {
        $this->sectionArea = $sectionArea;
        return $this;
    }

    /**
     * 区域名称
     * @return string
     */
    public function getSectionAreaRemark(): ?string
    {
        return $this->sectionAreaRemark;
    }

    /**
     * 区域名称
     * @param string $sectionAreaRemark
     * @return self
     */
    public function setSectionAreaRemark(?string $sectionAreaRemark): self
    {
        $this->sectionAreaRemark = $sectionAreaRemark;
        return $this;
    }

    /**
     * 场景名称
     * @return string
     */
    public function getSectionRemark(): ?string
    {
        return $this->sectionRemark;
    }

    /**
     * 场景名称
     * @param string $sectionRemark
     * @return self
     */
    public function setSectionRemark(?string $sectionRemark): self
    {
        $this->sectionRemark = $sectionRemark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataMd5 !== null) {
            $result['data_md5'] = $this->dataMd5;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->section !== null) {
            $result['section'] = $this->section;
        }
        if ($this->sectionArea !== null) {
            $result['section_area'] = $this->sectionArea;
        }
        if ($this->sectionAreaRemark !== null) {
            $result['section_area_remark'] = $this->sectionAreaRemark;
        }
        if ($this->sectionRemark !== null) {
            $result['section_remark'] = $this->sectionRemark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_md5'] ?? null) !== null) {
            $obj->dataMd5 = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (float) $v;
        }
        if (($v = $data['section'] ?? null) !== null) {
            $obj->section = (string) $v;
        }
        if (($v = $data['section_area'] ?? null) !== null) {
            $obj->sectionArea = (string) $v;
        }
        if (($v = $data['section_area_remark'] ?? null) !== null) {
            $obj->sectionAreaRemark = (string) $v;
        }
        if (($v = $data['section_remark'] ?? null) !== null) {
            $obj->sectionRemark = (string) $v;
        }
        return $obj;
    }
}
