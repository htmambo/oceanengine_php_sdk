<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormDetailV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormDetailV2ResponseDataForm
     */
    protected ?\Oceanengine\Models\ClueFormDetailV2ResponseDataForm $form = null;

    /**
     * @return \Oceanengine\Models\ClueFormDetailV2ResponseDataForm
     */
    public function getForm(): ?\Oceanengine\Models\ClueFormDetailV2ResponseDataForm
    {
        return $this->form;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2ResponseDataForm $form
     * @return self
     */
    public function setForm(?\Oceanengine\Models\ClueFormDetailV2ResponseDataForm $form): self
    {
        $this->form = $form;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->form !== null) {
            $result['form'] = $this->form;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['form'] ?? null) !== null && is_array($v)) {
            $obj->form = \Oceanengine\Models\ClueFormDetailV2ResponseDataForm::fromArray($v);
        }
        return $obj;
    }
}
