<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCountryInfoV2ResponseDataDistrictsInner implements \JsonSerializable
{
    /**
     * 行政区域code
     * @var string
     */
    protected ?string $code = null;

    /**
     * @var \Oceanengine\Models\ToolsCountryInfoV2DataDistrictsDescription
     */
    protected ?string $description = null;

    /**
     * 行政区域名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 行政区域code
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 行政区域code
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCountryInfoV2DataDistrictsDescription
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param \Oceanengine\Models\ToolsCountryInfoV2DataDistrictsDescription $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
