<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoProjectInfo implements \JsonSerializable
{
    /**
     * 合同名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 关联合同ID
     * @var string
     */
    protected ?string $projectId = null;

    /**
     * 合同名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 合同名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 关联合同ID
     * @return string
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * 关联合同ID
     * @param string $projectId
     * @return self
     */
    public function setProjectId(?string $projectId): self
    {
        $this->projectId = $projectId;
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
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (string) $v;
        }
        return $obj;
    }
}
