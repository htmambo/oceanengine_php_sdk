<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerLinkMicroApp implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * 兜底链接
     * @var string
     */
    protected ?string $defaultUrl = null;

    /**
     * 是否跳转小游戏
     * @var bool
     */
    protected ?bool $microGame = null;

    /**
     * 小程序启动参数
     * @var string
     */
    protected ?string $startParam = null;

    /**
     * 小程序启动页面
     * @var string
     */
    protected ?string $startProgram = null;

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 兜底链接
     * @return string
     */
    public function getDefaultUrl(): ?string
    {
        return $this->defaultUrl;
    }

    /**
     * 兜底链接
     * @param string $defaultUrl
     * @return self
     */
    public function setDefaultUrl(?string $defaultUrl): self
    {
        $this->defaultUrl = $defaultUrl;
        return $this;
    }

    /**
     * 是否跳转小游戏
     * @return bool
     */
    public function getMicroGame(): ?bool
    {
        return $this->microGame;
    }

    /**
     * 是否跳转小游戏
     * @param bool $microGame
     * @return self
     */
    public function setMicroGame(?bool $microGame): self
    {
        $this->microGame = $microGame;
        return $this;
    }

    /**
     * 小程序启动参数
     * @return string
     */
    public function getStartParam(): ?string
    {
        return $this->startParam;
    }

    /**
     * 小程序启动参数
     * @param string $startParam
     * @return self
     */
    public function setStartParam(?string $startParam): self
    {
        $this->startParam = $startParam;
        return $this;
    }

    /**
     * 小程序启动页面
     * @return string
     */
    public function getStartProgram(): ?string
    {
        return $this->startProgram;
    }

    /**
     * 小程序启动页面
     * @param string $startProgram
     * @return self
     */
    public function setStartProgram(?string $startProgram): self
    {
        $this->startProgram = $startProgram;
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
        if ($this->defaultUrl !== null) {
            $result['default_url'] = $this->defaultUrl;
        }
        if ($this->microGame !== null) {
            $result['micro_game'] = $this->microGame;
        }
        if ($this->startParam !== null) {
            $result['start_param'] = $this->startParam;
        }
        if ($this->startProgram !== null) {
            $result['start_program'] = $this->startProgram;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['default_url'] ?? null) !== null) {
            $obj->defaultUrl = (string) $v;
        }
        if (($v = $data['micro_game'] ?? null) !== null) {
            $obj->microGame = (bool) $v;
        }
        if (($v = $data['start_param'] ?? null) !== null) {
            $obj->startParam = (string) $v;
        }
        if (($v = $data['start_program'] ?? null) !== null) {
            $obj->startProgram = (string) $v;
        }
        return $obj;
    }
}
