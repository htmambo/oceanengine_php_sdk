<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $attachmentDescription = null;

    /**
     * @var string[]
     */
    protected ?array $brands = null;

    /**
     * @var string
     */
    protected ?string $firstClassCategoryName = null;

    /**
     * @var string
     */
    protected ?string $missionNameForDemander = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $other = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo $srvProductInfo = null;

    /**
     * @return string
     */
    public function getAttachmentDescription(): ?string
    {
        return $this->attachmentDescription;
    }

    /**
     * @param string $attachmentDescription
     * @return self
     */
    public function setAttachmentDescription(?string $attachmentDescription): self
    {
        $this->attachmentDescription = $attachmentDescription;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBrands(): ?array
    {
        return $this->brands;
    }

    /**
     * @param string[] $brands
     * @return self
     */
    public function setBrands(?array $brands): self
    {
        $this->brands = $brands;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstClassCategoryName(): ?string
    {
        return $this->firstClassCategoryName;
    }

    /**
     * @param string $firstClassCategoryName
     * @return self
     */
    public function setFirstClassCategoryName(?string $firstClassCategoryName): self
    {
        $this->firstClassCategoryName = $firstClassCategoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMissionNameForDemander(): ?string
    {
        return $this->missionNameForDemander;
    }

    /**
     * @param string $missionNameForDemander
     * @return self
     */
    public function setMissionNameForDemander(?string $missionNameForDemander): self
    {
        $this->missionNameForDemander = $missionNameForDemander;
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
    public function getOther(): ?string
    {
        return $this->other;
    }

    /**
     * @param string $other
     * @return self
     */
    public function setOther(?string $other): self
    {
        $this->other = $other;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo
     */
    public function getSrvProductInfo(): ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo
    {
        return $this->srvProductInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo $srvProductInfo
     * @return self
     */
    public function setSrvProductInfo(?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo $srvProductInfo): self
    {
        $this->srvProductInfo = $srvProductInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachmentDescription !== null) {
            $result['attachment_description'] = $this->attachmentDescription;
        }
        if ($this->brands !== null) {
            $result['brands'] = $this->brands;
        }
        if ($this->firstClassCategoryName !== null) {
            $result['first_class_category_name'] = $this->firstClassCategoryName;
        }
        if ($this->missionNameForDemander !== null) {
            $result['mission_name_for_demander'] = $this->missionNameForDemander;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->other !== null) {
            $result['other'] = $this->other;
        }
        if ($this->srvProductInfo !== null) {
            $result['srv_product_info'] = $this->srvProductInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_description'] ?? null) !== null) {
            $obj->attachmentDescription = (string) $v;
        }
        if (($v = $data['brands'] ?? null) !== null && is_array($v)) {
            $obj->brands = $v;
        }
        if (($v = $data['first_class_category_name'] ?? null) !== null) {
            $obj->firstClassCategoryName = (string) $v;
        }
        if (($v = $data['mission_name_for_demander'] ?? null) !== null) {
            $obj->missionNameForDemander = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['other'] ?? null) !== null) {
            $obj->other = (string) $v;
        }
        if (($v = $data['srv_product_info'] ?? null) !== null && is_array($v)) {
            $obj->srvProductInfo = \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo::fromArray($v);
        }
        return $obj;
    }
}
