<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectDeepCpaBidUpdateV30RequestDataInner implements \JsonSerializable
{
    /**
     * 深度出价，单位“元”，精度：两位小数。
     * @var float
     */
    protected ?float $deepbid = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 深度出价，单位“元”，精度：两位小数。
     * @return float
     */
    public function getDeepbid(): ?float
    {
        return $this->deepbid;
    }

    /**
     * 深度出价，单位“元”，精度：两位小数。
     * @param float $deepbid
     * @return self
     */
    public function setDeepbid(?float $deepbid): self
    {
        $this->deepbid = $deepbid;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
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
        if ($this->deepbid !== null) {
            $result['deepbid'] = $this->deepbid;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deepbid'] ?? null) !== null) {
            $obj->deepbid = (float) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
