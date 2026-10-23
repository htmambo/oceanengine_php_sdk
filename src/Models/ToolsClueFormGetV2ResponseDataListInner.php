<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueFormGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueFormGetV2DataListContainPhone
     */
    protected ?string $containPhone = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var bool
     */
    protected ?bool $enableLayer = null;

    /**
     * @var \Oceanengine\Models\ToolsClueFormGetV2DataListFormType
     */
    protected ?string $formType = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var int
     */
    protected ?int $isDel = null;

    /**
     * @var string
     */
    protected ?string $lightingPageUrl = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsClueFormGetV2DataListSubType
     */
    protected ?string $subType = null;

    /**
     * @var int
     */
    protected ?int $version = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueFormGetV2DataListContainPhone
     */
    public function getContainPhone(): ?string
    {
        return $this->containPhone;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueFormGetV2DataListContainPhone $containPhone
     * @return self
     */
    public function setContainPhone(?string $containPhone): self
    {
        $this->containPhone = $containPhone;
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
     * @return bool
     */
    public function getEnableLayer(): ?bool
    {
        return $this->enableLayer;
    }

    /**
     * @param bool $enableLayer
     * @return self
     */
    public function setEnableLayer(?bool $enableLayer): self
    {
        $this->enableLayer = $enableLayer;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueFormGetV2DataListFormType
     */
    public function getFormType(): ?string
    {
        return $this->formType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueFormGetV2DataListFormType $formType
     * @return self
     */
    public function setFormType(?string $formType): self
    {
        $this->formType = $formType;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

    /**
     * @param int $isDel
     * @return self
     */
    public function setIsDel(?int $isDel): self
    {
        $this->isDel = $isDel;
        return $this;
    }

    /**
     * @return string
     */
    public function getLightingPageUrl(): ?string
    {
        return $this->lightingPageUrl;
    }

    /**
     * @param string $lightingPageUrl
     * @return self
     */
    public function setLightingPageUrl(?string $lightingPageUrl): self
    {
        $this->lightingPageUrl = $lightingPageUrl;
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
     * @return \Oceanengine\Models\ToolsClueFormGetV2DataListSubType
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueFormGetV2DataListSubType $subType
     * @return self
     */
    public function setSubType(?string $subType): self
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return self
     */
    public function setVersion(?int $version): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->containPhone !== null) {
            $result['contain_phone'] = $this->containPhone;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->enableLayer !== null) {
            $result['enable_layer'] = $this->enableLayer;
        }
        if ($this->formType !== null) {
            $result['form_type'] = $this->formType;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->isDel !== null) {
            $result['is_del'] = $this->isDel;
        }
        if ($this->lightingPageUrl !== null) {
            $result['lighting_page_url'] = $this->lightingPageUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->subType !== null) {
            $result['sub_type'] = $this->subType;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['contain_phone'] ?? null) !== null) {
            $obj->containPhone = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['enable_layer'] ?? null) !== null) {
            $obj->enableLayer = (bool) $v;
        }
        if (($v = $data['form_type'] ?? null) !== null) {
            $obj->formType = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['is_del'] ?? null) !== null) {
            $obj->isDel = (int) $v;
        }
        if (($v = $data['lighting_page_url'] ?? null) !== null) {
            $obj->lightingPageUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sub_type'] ?? null) !== null) {
            $obj->subType = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (int) $v;
        }
        return $obj;
    }
}
