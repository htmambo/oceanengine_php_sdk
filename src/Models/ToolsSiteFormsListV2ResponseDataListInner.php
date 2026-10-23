<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteFormsListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $formId = null;

    /**
     * @var int
     */
    protected ?int $formIndex = null;

    /**
     * @var string
     */
    protected ?string $formName = null;

    /**
     * @return int
     */
    public function getFormId(): ?int
    {
        return $this->formId;
    }

    /**
     * @param int $formId
     * @return self
     */
    public function setFormId(?int $formId): self
    {
        $this->formId = $formId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFormIndex(): ?int
    {
        return $this->formIndex;
    }

    /**
     * @param int $formIndex
     * @return self
     */
    public function setFormIndex(?int $formIndex): self
    {
        $this->formIndex = $formIndex;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormName(): ?string
    {
        return $this->formName;
    }

    /**
     * @param string $formName
     * @return self
     */
    public function setFormName(?string $formName): self
    {
        $this->formName = $formName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->formId !== null) {
            $result['form_id'] = $this->formId;
        }
        if ($this->formIndex !== null) {
            $result['form_index'] = $this->formIndex;
        }
        if ($this->formName !== null) {
            $result['form_name'] = $this->formName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['form_id'] ?? null) !== null) {
            $obj->formId = (int) $v;
        }
        if (($v = $data['form_index'] ?? null) !== null) {
            $obj->formIndex = (int) $v;
        }
        if (($v = $data['form_name'] ?? null) !== null) {
            $obj->formName = (string) $v;
        }
        return $obj;
    }
}
