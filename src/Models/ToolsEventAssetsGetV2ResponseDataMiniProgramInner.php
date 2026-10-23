<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2ResponseDataMiniProgramInner implements \JsonSerializable
{
    /**
     * 字节小程序资产id
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 字节小程序资产名称
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * 小程序instance_id
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 字节小程序id
     * @var string
     */
    protected ?string $miniProgramId = null;

    /**
     * 字节小程序资产id
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 字节小程序资产id
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 字节小程序资产名称
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 字节小程序资产名称
     * @param string $assetName
     * @return self
     */
    public function setAssetName(?string $assetName): self
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * 小程序instance_id
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 小程序instance_id
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 字节小程序id
     * @return string
     */
    public function getMiniProgramId(): ?string
    {
        return $this->miniProgramId;
    }

    /**
     * 字节小程序id
     * @param string $miniProgramId
     * @return self
     */
    public function setMiniProgramId(?string $miniProgramId): self
    {
        $this->miniProgramId = $miniProgramId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->miniProgramId !== null) {
            $result['mini_program_id'] = $this->miniProgramId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['mini_program_id'] ?? null) !== null) {
            $obj->miniProgramId = (string) $v;
        }
        return $obj;
    }
}
