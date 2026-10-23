<?php

declare(strict_types=1);

namespace Oceanengine;

/**
 * Stores the configuration of the API client.
 */
class Configuration
{
    /** 上游 Go SDK 版本，来源 ad_open_sdk_go/config/configuration.go 的 const Version */
    public const SDK_VERSION = Version::VERSION;

    /** @var string API host, e.g. api.oceanengine.com */
    public string $host;

    /** @var string URL scheme, e.g. https */
    public string $scheme;

    /** @var array<string, string> Default headers sent with every request */
    public array $defaultHeader;

    /** @var string User-Agent header value */
    public string $userAgent;

    /** @var bool Debug flag */
    public bool $debug;

    /** @var bool Global request/response log flag */
    public bool $logEnable;

    /** @var bool Whether the log middleware is registered */
    public bool $useLogMw;

    /** @var bool Allow requests to a host other than $host (e.g. presigned upload endpoints) */
    public bool $allowCrossHostRequests;

    /** @var int Maximum number of HTTP redirects to follow */
    public int $maxRedirects;

    /**
     * @param string $host
     * @param string $scheme
     */
    public function __construct(string $host = 'api.oceanengine.com', string $scheme = 'https')
    {
        $this->host = $host;
        $this->scheme = $scheme;
        $this->defaultHeader = [];
        $this->userAgent = 'Bytedance Ads Openapi SDK';
        $this->debug = false;
        $this->logEnable = false;
        $this->useLogMw = true;
        $this->allowCrossHostRequests = false;
        $this->maxRedirects = 5;
    }

    /**
     * Returns a Configuration with the Go NewConfiguration() defaults.
     *
     * @return self
     */
    public static function default(): self
    {
        return new self();
    }

    /**
     * Adds a new HTTP header to the default headers.
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public function addDefaultHeader(string $key, string $value): void
    {
        $this->defaultHeader[$key] = $value;
    }

    /**
     * Returns scheme://host.
     *
     * @return string
     */
    public function getBasePath(): string
    {
        return $this->scheme . '://' . $this->host;
    }
}
