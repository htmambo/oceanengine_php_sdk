<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseCreateV30ResponseDataErrorMaterialListInner implements \JsonSerializable
{
    /**
     * 添加起量失败的素材id
     * @var int
     */
    protected ?int $errorMaterialId = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * 添加起量失败的素材id
     * @return int
     */
    public function getErrorMaterialId(): ?int
    {
        return $this->errorMaterialId;
    }

    /**
     * 添加起量失败的素材id
     * @param int $errorMaterialId
     * @return self
     */
    public function setErrorMaterialId(?int $errorMaterialId): self
    {
        $this->errorMaterialId = $errorMaterialId;
        return $this;
    }

    /**
     * 失败原因
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 失败原因
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
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
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_material_id'] ?? null) !== null) {
            $obj->errorMaterialId = (int) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        return $obj;
    }
}
