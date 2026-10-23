<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAssetsCreateV2RequestQuickAppAsset implements \JsonSerializable
{
    /**
     * 快应用名称，长度限制为20，一个字符长度为1
     * @var string
     */
    protected ?string $name = null;

    /**
     * 快应用包名，长度限制为140
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * 快应用名称，长度限制为20，一个字符长度为1
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 快应用名称，长度限制为20，一个字符长度为1
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 快应用包名，长度限制为140
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * 快应用包名，长度限制为140
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        return $obj;
    }
}
