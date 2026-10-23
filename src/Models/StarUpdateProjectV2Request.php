<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarUpdateProjectV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $demanderId = null;

    /**
     * 一级行业名称
     * @var string
     */
    protected ?string $firstClassCategoryName = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $projectName = null;

    /**
     * 二级行业名称
     * @var string
     */
    protected ?string $secondClassCategoryName = null;

    /**
     * 星图品牌名称
     * @var string
     */
    protected ?string $starBrandName = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 星图细分品牌名称
     * @var string
     */
    protected ?string $starSubBrandName = null;

    /**
     * @return int
     */
    public function getDemanderId(): ?int
    {
        return $this->demanderId;
    }

    /**
     * @param int $demanderId
     * @return self
     */
    public function setDemanderId(?int $demanderId): self
    {
        $this->demanderId = $demanderId;
        return $this;
    }

    /**
     * 一级行业名称
     * @return string
     */
    public function getFirstClassCategoryName(): ?string
    {
        return $this->firstClassCategoryName;
    }

    /**
     * 一级行业名称
     * @param string $firstClassCategoryName
     * @return self
     */
    public function setFirstClassCategoryName(?string $firstClassCategoryName): self
    {
        $this->firstClassCategoryName = $firstClassCategoryName;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * 项目名称
     * @param string $projectName
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * 二级行业名称
     * @return string
     */
    public function getSecondClassCategoryName(): ?string
    {
        return $this->secondClassCategoryName;
    }

    /**
     * 二级行业名称
     * @param string $secondClassCategoryName
     * @return self
     */
    public function setSecondClassCategoryName(?string $secondClassCategoryName): self
    {
        $this->secondClassCategoryName = $secondClassCategoryName;
        return $this;
    }

    /**
     * 星图品牌名称
     * @return string
     */
    public function getStarBrandName(): ?string
    {
        return $this->starBrandName;
    }

    /**
     * 星图品牌名称
     * @param string $starBrandName
     * @return self
     */
    public function setStarBrandName(?string $starBrandName): self
    {
        $this->starBrandName = $starBrandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 星图细分品牌名称
     * @return string
     */
    public function getStarSubBrandName(): ?string
    {
        return $this->starSubBrandName;
    }

    /**
     * 星图细分品牌名称
     * @param string $starSubBrandName
     * @return self
     */
    public function setStarSubBrandName(?string $starSubBrandName): self
    {
        $this->starSubBrandName = $starSubBrandName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->demanderId !== null) {
            $result['demander_id'] = $this->demanderId;
        }
        if ($this->firstClassCategoryName !== null) {
            $result['first_class_category_name'] = $this->firstClassCategoryName;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectName !== null) {
            $result['project_name'] = $this->projectName;
        }
        if ($this->secondClassCategoryName !== null) {
            $result['second_class_category_name'] = $this->secondClassCategoryName;
        }
        if ($this->starBrandName !== null) {
            $result['star_brand_name'] = $this->starBrandName;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->starSubBrandName !== null) {
            $result['star_sub_brand_name'] = $this->starSubBrandName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['demander_id'] ?? null) !== null) {
            $obj->demanderId = (int) $v;
        }
        if (($v = $data['first_class_category_name'] ?? null) !== null) {
            $obj->firstClassCategoryName = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['project_name'] ?? null) !== null) {
            $obj->projectName = (string) $v;
        }
        if (($v = $data['second_class_category_name'] ?? null) !== null) {
            $obj->secondClassCategoryName = (string) $v;
        }
        if (($v = $data['star_brand_name'] ?? null) !== null) {
            $obj->starBrandName = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['star_sub_brand_name'] ?? null) !== null) {
            $obj->starSubBrandName = (string) $v;
        }
        return $obj;
    }
}
