<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner implements \JsonSerializable
{
    /**
     * 负责人部门ID
     * @var int
     */
    protected ?int $optimizerDepartmentId = null;

    /**
     * 负责人部门名称
     * @var string
     */
    protected ?string $optimizerDepartmentName = null;

    /**
     * 负责人部门ID
     * @return int
     */
    public function getOptimizerDepartmentId(): ?int
    {
        return $this->optimizerDepartmentId;
    }

    /**
     * 负责人部门ID
     * @param int $optimizerDepartmentId
     * @return self
     */
    public function setOptimizerDepartmentId(?int $optimizerDepartmentId): self
    {
        $this->optimizerDepartmentId = $optimizerDepartmentId;
        return $this;
    }

    /**
     * 负责人部门名称
     * @return string
     */
    public function getOptimizerDepartmentName(): ?string
    {
        return $this->optimizerDepartmentName;
    }

    /**
     * 负责人部门名称
     * @param string $optimizerDepartmentName
     * @return self
     */
    public function setOptimizerDepartmentName(?string $optimizerDepartmentName): self
    {
        $this->optimizerDepartmentName = $optimizerDepartmentName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->optimizerDepartmentId !== null) {
            $result['optimizer_department_id'] = $this->optimizerDepartmentId;
        }
        if ($this->optimizerDepartmentName !== null) {
            $result['optimizer_department_name'] = $this->optimizerDepartmentName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['optimizer_department_id'] ?? null) !== null) {
            $obj->optimizerDepartmentId = (int) $v;
        }
        if (($v = $data['optimizer_department_name'] ?? null) !== null) {
            $obj->optimizerDepartmentName = (string) $v;
        }
        return $obj;
    }
}
