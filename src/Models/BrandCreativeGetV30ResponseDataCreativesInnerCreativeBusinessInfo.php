<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo implements \JsonSerializable
{
    /**
     * 购物车无分佣直达链接
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 购物车无分佣链接
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * 购物车无分佣直达链接
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * 购物车无分佣直达链接
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * 购物车无分佣链接
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * 购物车无分佣链接
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        return $obj;
    }
}
