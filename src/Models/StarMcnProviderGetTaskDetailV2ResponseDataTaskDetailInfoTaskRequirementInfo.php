<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo implements \JsonSerializable
{
    /**
     * 参考素材包
     * @var string
     */
    protected ?string $referenceMaterialPackage = null;

    /**
     * 参考素材包
     * @return string
     */
    public function getReferenceMaterialPackage(): ?string
    {
        return $this->referenceMaterialPackage;
    }

    /**
     * 参考素材包
     * @param string $referenceMaterialPackage
     * @return self
     */
    public function setReferenceMaterialPackage(?string $referenceMaterialPackage): self
    {
        $this->referenceMaterialPackage = $referenceMaterialPackage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->referenceMaterialPackage !== null) {
            $result['reference_material_package'] = $this->referenceMaterialPackage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['reference_material_package'] ?? null) !== null) {
            $obj->referenceMaterialPackage = (string) $v;
        }
        return $obj;
    }
}
