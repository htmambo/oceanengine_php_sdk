<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseCreateV30ResponseDataErrorMaterialErrorMessageListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $errorMaterialId = null;

    /**
     * @var string
     */
    protected ?string $materialErrorMessage = null;

    /**
     * @return int
     */
    public function getErrorMaterialId(): ?int
    {
        return $this->errorMaterialId;
    }

    /**
     * @param int $errorMaterialId
     * @return self
     */
    public function setErrorMaterialId(?int $errorMaterialId): self
    {
        $this->errorMaterialId = $errorMaterialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaterialErrorMessage(): ?string
    {
        return $this->materialErrorMessage;
    }

    /**
     * @param string $materialErrorMessage
     * @return self
     */
    public function setMaterialErrorMessage(?string $materialErrorMessage): self
    {
        $this->materialErrorMessage = $materialErrorMessage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorMaterialId !== null) {
            $result['error_material_id'] = $this->errorMaterialId;
        }
        if ($this->materialErrorMessage !== null) {
            $result['material_error_message'] = $this->materialErrorMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_material_id'] ?? null) !== null) {
            $obj->errorMaterialId = (int) $v;
        }
        if (($v = $data['material_error_message'] ?? null) !== null) {
            $obj->materialErrorMessage = (string) $v;
        }
        return $obj;
    }
}
