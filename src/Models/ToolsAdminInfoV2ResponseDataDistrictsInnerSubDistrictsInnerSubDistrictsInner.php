<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdminInfoV2ResponseDataDistrictsInnerSubDistrictsInnerSubDistrictsInner implements \JsonSerializable
{
    /**
     * 中国大陆行政区域编码
     * @var string
     */
    protected ?string $code = null;

    /**
     * 港澳台、国外行政区域编码
     * @var int
     */
    protected ?int $geonameId = null;

    /**
     * @var \Oceanengine\Models\ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel
     */
    protected ?string $level = null;

    /**
     * 行政区域名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 子行政层级信息
     * @var \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInnerSubDistrictsInnerSubDistrictsInnerSubDistrictsInner[]
     */
    protected ?array $subDistricts = null;

    /**
     * 中国大陆行政区域编码
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 中国大陆行政区域编码
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * 港澳台、国外行政区域编码
     * @return int
     */
    public function getGeonameId(): ?int
    {
        return $this->geonameId;
    }

    /**
     * 港澳台、国外行政区域编码
     * @param int $geonameId
     * @return self
     */
    public function setGeonameId(?int $geonameId): self
    {
        $this->geonameId = $geonameId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdminInfoV2DataDistrictsSubDistrictsSubDistrictsLevel $level
     * @return self
     */
    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    /**
     * 行政区域名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 行政区域名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 子行政层级信息
     * @return \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInnerSubDistrictsInnerSubDistrictsInnerSubDistrictsInner[]
     */
    public function getSubDistricts(): ?array
    {
        return $this->subDistricts;
    }

    /**
     * 子行政层级信息
     * @param \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInnerSubDistrictsInnerSubDistrictsInnerSubDistrictsInner[] $subDistricts
     * @return self
     */
    public function setSubDistricts(?array $subDistricts): self
    {
        $this->subDistricts = $subDistricts;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->geonameId !== null) {
            $result['geoname_id'] = $this->geonameId;
        }
        if ($this->level !== null) {
            $result['level'] = $this->level;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->subDistricts !== null) {
            $result['sub_districts'] = $this->subDistricts;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['geoname_id'] ?? null) !== null) {
            $obj->geonameId = (int) $v;
        }
        if (($v = $data['level'] ?? null) !== null) {
            $obj->level = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sub_districts'] ?? null) !== null && is_array($v)) {
            $obj->subDistricts = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInnerSubDistrictsInnerSubDistrictsInnerSubDistrictsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
