<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $imageMode = null;

    /**
     * @var string[]
     */
    protected ?array $urlList = null;

    /**
     * @return int
     */
    public function getImageMode(): ?int
    {
        return $this->imageMode;
    }

    /**
     * @param int $imageMode
     * @return self
     */
    public function setImageMode(?int $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUrlList(): ?array
    {
        return $this->urlList;
    }

    /**
     * @param string[] $urlList
     * @return self
     */
    public function setUrlList(?array $urlList): self
    {
        $this->urlList = $urlList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->urlList !== null) {
            $result['url_list'] = $this->urlList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (int) $v;
        }
        if (($v = $data['url_list'] ?? null) !== null && is_array($v)) {
            $obj->urlList = $v;
        }
        return $obj;
    }
}
