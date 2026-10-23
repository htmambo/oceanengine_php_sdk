<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternalWechatMicroAppInfo implements \JsonSerializable
{
    /**
     * 微信小程序页面路径
     * @var string
     */
    protected ?string $path = null;

    /**
     * 微信小程序原始ID
     * @var string
     */
    protected ?string $userName = null;

    /**
     * 微信小程序页面路径
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * 微信小程序页面路径
     * @param string $path
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    /**
     * 微信小程序原始ID
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * 微信小程序原始ID
     * @param string $userName
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;
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
        if ($this->userName !== null) {
            $result['user_name'] = $this->userName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['path'] ?? null) !== null) {
            $obj->path = (string) $v;
        }
        if (($v = $data['user_name'] ?? null) !== null) {
            $obj->userName = (string) $v;
        }
        return $obj;
    }
}
