<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMicroAppCreateV30RequestAppPage implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $link = null;

    /**
     * @var string
     */
    protected ?string $linkRemark = null;

    /**
     * @var string
     */
    protected ?string $startPage = null;

    /**
     * @var string
     */
    protected ?string $startParam = null;

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
     * @return string
     */
    public function getLinkRemark(): ?string
    {
        return $this->linkRemark;
    }

    /**
     * @param string $linkRemark
     * @return self
     */
    public function setLinkRemark(?string $linkRemark): self
    {
        $this->linkRemark = $linkRemark;
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
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->linkRemark !== null) {
            $result['link_remark'] = $this->linkRemark;
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
        if (($v = $data['link'] ?? null) !== null) {
            $obj->link = (string) $v;
        }
        if (($v = $data['link_remark'] ?? null) !== null) {
            $obj->linkRemark = (string) $v;
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
