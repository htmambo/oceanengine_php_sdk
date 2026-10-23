<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo implements \JsonSerializable
{
    /**
     * appid
     * @var string
     */
    protected ?string $appId = null;

    /**
     * 启动参数
     * @var string
     */
    protected ?string $startParam = null;

    /**
     * 启动路径
     * @var string
     */
    protected ?string $startPath = null;

    /**
     * 小程序类型
     * @var int
     */
    protected ?int $type = null;

    /**
     * 完整链接
     * @var string
     */
    protected ?string $url = null;

    /**
     * appid
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * appid
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 启动参数
     * @return string
     */
    public function getStartParam(): ?string
    {
        return $this->startParam;
    }

    /**
     * 启动参数
     * @param string $startParam
     * @return self
     */
    public function setStartParam(?string $startParam): self
    {
        $this->startParam = $startParam;
        return $this;
    }

    /**
     * 启动路径
     * @return string
     */
    public function getStartPath(): ?string
    {
        return $this->startPath;
    }

    /**
     * 启动路径
     * @param string $startPath
     * @return self
     */
    public function setStartPath(?string $startPath): self
    {
        $this->startPath = $startPath;
        return $this;
    }

    /**
     * 小程序类型
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * 小程序类型
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 完整链接
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 完整链接
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->startParam !== null) {
            $result['start_param'] = $this->startParam;
        }
        if ($this->startPath !== null) {
            $result['start_path'] = $this->startPath;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['start_param'] ?? null) !== null) {
            $obj->startParam = (string) $v;
        }
        if (($v = $data['start_path'] ?? null) !== null) {
            $obj->startPath = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
