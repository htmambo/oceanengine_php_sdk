<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroGameCreateV30RequestSchemaInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $link = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroGameCreateV30SchemaInfoOperateType
     */
    protected ?string $operateType = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var string
     */
    protected ?string $startPage = null;

    /**
     * @var string
     */
    protected ?string $startParam = null;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroGameCreateV30SchemaInfoOperateType
     */
    public function getOperateType(): ?string
    {
        return $this->operateType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroGameCreateV30SchemaInfoOperateType $operateType
     * @return self
     */
    public function setOperateType(?string $operateType): self
    {
        $this->operateType = $operateType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartPage(): ?string
    {
        return $this->startPage;
    }

    /**
     * @param string $startPage
     * @return self
     */
    public function setStartPage(?string $startPage): self
    {
        $this->startPage = $startPage;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartParam(): ?string
    {
        return $this->startParam;
    }

    /**
     * @param string $startParam
     * @return self
     */
    public function setStartParam(?string $startParam): self
    {
        $this->startParam = $startParam;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->operateType !== null) {
            $result['operate_type'] = $this->operateType;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->startPage !== null) {
            $result['start_page'] = $this->startPage;
        }
        if ($this->startParam !== null) {
            $result['start_param'] = $this->startParam;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['link'] ?? null) !== null) {
            $obj->link = (string) $v;
        }
        if (($v = $data['operate_type'] ?? null) !== null) {
            $obj->operateType = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['start_page'] ?? null) !== null) {
            $obj->startPage = (string) $v;
        }
        if (($v = $data['start_param'] ?? null) !== null) {
            $obj->startParam = (string) $v;
        }
        return $obj;
    }
}
