<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpPlayableUploadV30ResponseDataData implements \JsonSerializable
{
    /**
     * 小游戏资产的app_id
     * @var string
     */
    protected ?string $appId = null;

    /**
     * 试玩/直玩素材mid
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 试玩/直玩素材的md5值
     * @var string
     */
    protected ?string $signature = null;

    /**
     * 试玩素材版本号（仅试玩素材）
     * @var string
     */
    protected ?string $version = null;

    /**
     * 小游戏资产的app_id
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 小游戏资产的app_id
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 试玩/直玩素材mid
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 试玩/直玩素材mid
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 试玩/直玩素材的md5值
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 试玩/直玩素材的md5值
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * 试玩素材版本号（仅试玩素材）
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * 试玩素材版本号（仅试玩素材）
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
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
