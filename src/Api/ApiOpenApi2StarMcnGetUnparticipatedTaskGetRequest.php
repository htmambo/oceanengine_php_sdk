<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_get_unparticipated_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 机构承包-获取未参与任务列表
 */
class ApiOpenApi2StarMcnGetUnparticipatedTaskGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?int $payType = null;
    private ?int $minCreateTimeStamp = null;
    private ?int $maxCreateTimeStamp = null;
    private ?int $firstClassCategory = null;
    private ?int $secondClassCategory = null;
    private ?string $keyword = null;
    private ?int $settlementType = null;
    private ?int $playletCategory = null;
    private ?array $playletTheme = null;
    private ?int $playletGender = null;
    private ?int $playletHot = null;
    private ?int $playletFirstWeek = null;
    private ?int $playletSecondWeek = null;
    private ?int $highProfitChallenge = null;
    private ?int $developerId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnGetUnparticipatedTaskV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function payType(int $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    public function minCreateTimeStamp(int $minCreateTimeStamp): self
    {
        $this->minCreateTimeStamp = $minCreateTimeStamp;
        return $this;
    }

    public function maxCreateTimeStamp(int $maxCreateTimeStamp): self
    {
        $this->maxCreateTimeStamp = $maxCreateTimeStamp;
        return $this;
    }

    public function firstClassCategory(int $firstClassCategory): self
    {
        $this->firstClassCategory = $firstClassCategory;
        return $this;
    }

    public function secondClassCategory(int $secondClassCategory): self
    {
        $this->secondClassCategory = $secondClassCategory;
        return $this;
    }

    public function keyword(string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    public function settlementType(int $settlementType): self
    {
        $this->settlementType = $settlementType;
        return $this;
    }

    public function playletCategory(int $playletCategory): self
    {
        $this->playletCategory = $playletCategory;
        return $this;
    }

    public function playletTheme(array $playletTheme): self
    {
        $this->playletTheme = $playletTheme;
        return $this;
    }

    public function playletGender(int $playletGender): self
    {
        $this->playletGender = $playletGender;
        return $this;
    }

    public function playletHot(int $playletHot): self
    {
        $this->playletHot = $playletHot;
        return $this;
    }

    public function playletFirstWeek(int $playletFirstWeek): self
    {
        $this->playletFirstWeek = $playletFirstWeek;
        return $this;
    }

    public function playletSecondWeek(int $playletSecondWeek): self
    {
        $this->playletSecondWeek = $playletSecondWeek;
        return $this;
    }

    public function highProfitChallenge(int $highProfitChallenge): self
    {
        $this->highProfitChallenge = $highProfitChallenge;
        return $this;
    }

    public function developerId(int $developerId): self
    {
        $this->developerId = $developerId;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 机构承包-获取未参与任务列表
     */
    public function execute(): \Oceanengine\Models\StarMcnGetUnparticipatedTaskV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 1) {
            throw new \InvalidArgumentException('pageSize must be greater than 1');
        }
        if ($this->pageSize > 10) {
            throw new \InvalidArgumentException('pageSize must be less than 10');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->payType !== null) {
            $queryParams['pay_type'] = $this->payType;
        }
        if ($this->minCreateTimeStamp !== null) {
            $queryParams['min_create_time_stamp'] = $this->minCreateTimeStamp;
        }
        if ($this->maxCreateTimeStamp !== null) {
            $queryParams['max_create_time_stamp'] = $this->maxCreateTimeStamp;
        }
        if ($this->firstClassCategory !== null) {
            $queryParams['first_class_category'] = $this->firstClassCategory;
        }
        if ($this->secondClassCategory !== null) {
            $queryParams['second_class_category'] = $this->secondClassCategory;
        }
        if ($this->keyword !== null) {
            $queryParams['keyword'] = $this->keyword;
        }
        if ($this->settlementType !== null) {
            $queryParams['settlement_type'] = $this->settlementType;
        }
        if ($this->playletCategory !== null) {
            $queryParams['playlet_category'] = $this->playletCategory;
        }
        if ($this->playletTheme !== null) {
            $queryParams['playlet_theme'] = $this->playletTheme;
        }
        if ($this->playletGender !== null) {
            $queryParams['playlet_gender'] = $this->playletGender;
        }
        if ($this->playletHot !== null) {
            $queryParams['playlet_hot'] = $this->playletHot;
        }
        if ($this->playletFirstWeek !== null) {
            $queryParams['playlet_first_week'] = $this->playletFirstWeek;
        }
        if ($this->playletSecondWeek !== null) {
            $queryParams['playlet_second_week'] = $this->playletSecondWeek;
        }
        if ($this->highProfitChallenge !== null) {
            $queryParams['high_profit_challenge'] = $this->highProfitChallenge;
        }
        if ($this->developerId !== null) {
            $queryParams['developer_id'] = $this->developerId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/get_unparticipated_task/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnGetUnparticipatedTaskV2Response::class);

        return $result['model'];
    }
}
