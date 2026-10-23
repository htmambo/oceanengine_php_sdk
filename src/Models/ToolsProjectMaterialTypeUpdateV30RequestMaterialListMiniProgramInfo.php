<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo implements \JsonSerializable
{
    /**
     * 小程序/小游戏原始id，无url时必填
     * @var string
     */
    protected ?string $appId = null;

    /**
     * 页面监测参数
     * @var string
     */
    protected ?string $params = null;

    /**
     * 启动路径，小程序类型必传，小游戏不传
     * @var string
     */
    protected ?string $startPath = null;

    /**
     * 字节小程序调起链接；传入时app_id/start_path/params无须传入
     * @var string
     */
    protected ?string $url = null;

    /**
     * 小程序/小游戏原始id，无url时必填
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 小程序/小游戏原始id，无url时必填
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 页面监测参数
     * @return string
     */
    public function getParams(): ?string
    {
        return $this->params;
    }

    /**
     * 页面监测参数
     * @param string $params
     * @return self
     */
    public function setParams(?string $params): self
    {
        $this->params = $params;
        return $this;
    }

    /**
     * 启动路径，小程序类型必传，小游戏不传
     * @return string
     */
    public function getStartPath(): ?string
    {
        return $this->startPath;
    }

    /**
     * 启动路径，小程序类型必传，小游戏不传
     * @param string $startPath
     * @return self
     */
    public function setStartPath(?string $startPath): self
    {
        $this->startPath = $startPath;
        return $this;
    }

    /**
     * 字节小程序调起链接；传入时app_id/start_path/params无须传入
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 字节小程序调起链接；传入时app_id/start_path/params无须传入
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
        if ($this->params !== null) {
            $result['params'] = $this->params;
        }
        if ($this->startPath !== null) {
            $result['start_path'] = $this->startPath;
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
        if (($v = $data['params'] ?? null) !== null) {
            $obj->params = (string) $v;
        }
        if (($v = $data['start_path'] ?? null) !== null) {
            $obj->startPath = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
