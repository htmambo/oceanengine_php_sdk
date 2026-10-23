<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo implements \JsonSerializable
{
    /**
     * 路径
     * @var string
     */
    protected ?string $path = null;

    /**
     * 用户名
     * @var string
     */
    protected ?string $username = null;

    /**
     * 路径
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * 路径
     * @param string $path
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    /**
     * 用户名
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * 用户名
     * @param string $username
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->path !== null) {
            $result['path'] = $this->path;
        }
        if ($this->username !== null) {
            $result['username'] = $this->username;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['path'] ?? null) !== null) {
            $obj->path = (string) $v;
        }
        if (($v = $data['username'] ?? null) !== null) {
            $obj->username = (string) $v;
        }
        return $obj;
    }
}
