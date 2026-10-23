<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdminInfoV2ResponseData implements \JsonSerializable
{
    /**
     * 行政层级信息
     * @var \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInner[]
     */
    protected ?array $districts = null;

    /**
     * 行政信息版本号
     * @var string
     */
    protected ?string $version = null;

    /**
     * 行政层级信息
     * @return \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInner[]
     */
    public function getDistricts(): ?array
    {
        return $this->districts;
    }

    /**
     * 行政层级信息
     * @param \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInner[] $districts
     * @return self
     */
    public function setDistricts(?array $districts): self
    {
        $this->districts = $districts;
        return $this;
    }

    /**
     * 行政信息版本号
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * 行政信息版本号
     * @param string $version
     * @return self
     */
    public function setVersion(?string $version): self
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
        if ($this->districts !== null) {
            $result['districts'] = $this->districts;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['districts'] ?? null) !== null && is_array($v)) {
            $obj->districts = array_map(fn ($vv) => \Oceanengine\Models\ToolsAdminInfoV2ResponseDataDistrictsInner::fromArray($vv), $v);
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
