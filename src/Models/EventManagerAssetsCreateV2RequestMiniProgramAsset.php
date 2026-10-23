<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAssetsCreateV2RequestMiniProgramAsset implements \JsonSerializable
{
    /**
     * 小程序instance_id
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 小程序appId
     * @var string
     */
    protected ?string $miniProgramId = null;

    /**
     * 小程序的名称
     * @var string
     */
    protected ?string $miniProgramName = null;

    /**
     * @var \Oceanengine\Models\EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType
     */
    protected ?string $miniProgramType = null;

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
     * 小程序appId
     * @return string
     */
    public function getMiniProgramId(): ?string
    {
        return $this->miniProgramId;
    }

    /**
     * 小程序appId
     * @param string $miniProgramId
     * @return self
     */
    public function setMiniProgramId(?string $miniProgramId): self
    {
        $this->miniProgramId = $miniProgramId;
        return $this;
    }

    /**
     * 小程序的名称
     * @return string
     */
    public function getMiniProgramName(): ?string
    {
        return $this->miniProgramName;
    }

    /**
     * 小程序的名称
     * @param string $miniProgramName
     * @return self
     */
    public function setMiniProgramName(?string $miniProgramName): self
    {
        $this->miniProgramName = $miniProgramName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType
     */
    public function getMiniProgramType(): ?string
    {
        return $this->miniProgramType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType $miniProgramType
     * @return self
     */
    public function setMiniProgramType(?string $miniProgramType): self
    {
        $this->miniProgramType = $miniProgramType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->miniProgramId !== null) {
            $result['mini_program_id'] = $this->miniProgramId;
        }
        if ($this->miniProgramName !== null) {
            $result['mini_program_name'] = $this->miniProgramName;
        }
        if ($this->miniProgramType !== null) {
            $result['mini_program_type'] = $this->miniProgramType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['mini_program_id'] ?? null) !== null) {
            $obj->miniProgramId = (string) $v;
        }
        if (($v = $data['mini_program_name'] ?? null) !== null) {
            $obj->miniProgramName = (string) $v;
        }
        if (($v = $data['mini_program_type'] ?? null) !== null) {
            $obj->miniProgramType = (string) $v;
        }
        return $obj;
    }
}
