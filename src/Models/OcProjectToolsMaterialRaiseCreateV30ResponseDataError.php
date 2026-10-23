<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseCreateV30ResponseDataError implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataErrorMaterialErrorMessageListInner[]
     */
    protected ?array $materialErrorMessageList = null;

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataErrorMaterialErrorMessageListInner[]
     */
    public function getMaterialErrorMessageList(): ?array
    {
        return $this->materialErrorMessageList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataErrorMaterialErrorMessageListInner[] $materialErrorMessageList
     * @return self
     */
    public function setMaterialErrorMessageList(?array $materialErrorMessageList): self
    {
        $this->materialErrorMessageList = $materialErrorMessageList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        if ($this->materialErrorMessageList !== null) {
            $result['material_error_message_list'] = $this->materialErrorMessageList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        if (($v = $data['material_error_message_list'] ?? null) !== null && is_array($v)) {
            $obj->materialErrorMessageList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataErrorMaterialErrorMessageListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
