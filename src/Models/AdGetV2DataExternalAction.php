<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataExternalAction
{
    public const AD_CONVERT_TYPE_DIALBACK_CONNECT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_DIALBACK_CONNECT';
    public const AD_CONVERT_TYPE_OTO_STAY_TIME_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_OTO_STAY_TIME';
    public const AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER';
    public const AD_CONVERT_TYPE_CLUE_CONFIRM_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLUE_CONFIRM';
    public const AD_CONVERT_TYPE_SHOPPING_CART_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SHOPPING_CART';
    public const AD_CONVERT_TYPE_RETENTION_7_D_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_RETENTION_7D';
    public const AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN';
    public const AD_CONVERT_TYPE_XPATH_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_XPATH';
    public const AD_CONVERT_TYPE_OTHER_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_OTHER';
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LINK_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LINK_ACTION';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_ANCHOR_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_ANCHOR_CLICK';
    public const AD_CONVERT_TYPE_SHOPPING_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SHOPPING';
    public const AD_CONVERT_TYPE_CLUE_PAY_SUCCEED_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLUE_PAY_SUCCEED';
    public const AD_CONVERT_TYPE_IPU_QUALIFY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_IPU_QUALIFY';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LT_ROI_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LT_ROI';
    public const AD_CONVERT_TYPE_LIVE_FANS_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_FANS_ACTION';
    public const AD_CONVERT_TYPE_FORM_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FORM';
    public const AD_CONVERT_TYPE_FORM_DEEP_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FORM_DEEP';
    public const AD_CONVERT_TYPE_MULTIPLE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MULTIPLE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_PAID_CLUE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PAID_CLUE';
    public const AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE';
    public const AD_CONVERT_TYPE_PHONE_CONFIRM_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PHONE_CONFIRM';
    public const AD_CONVERT_TYPE_BOOST_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_BOOST';
    public const AD_CONVERT_TYPE_HIGH_VALUE_CLUE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_HIGH_VALUE_CLUE';
    public const AD_CONVERT_TYPE_CLICK_DOWNLOAD_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLICK_DOWNLOAD';
    public const AD_CONVERT_TYPE_APPLET_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_APPLET_CLICK';
    public const AD_CONVERT_TYPE_FORM_ANSWER_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FORM_ANSWER';
    public const AD_CONVERT_TYPE_PERSONAL_INFORMATION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PERSONAL_INFORMATION';
    public const AD_CONVERT_TYPE_CONSULT_CLUE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CONSULT_CLUE';
    public const AD_CONVERT_TYPE_GAME_ADDICTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_GAME_ADDICTION';
    public const AD_CONVERT_TYPE_PREMIUM_UPGEADE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PREMIUM_UPGEADE';
    public const AD_CONVERT_TYPE_RETENTION_DAYS_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_RETENTION_DAYS';
    public const AD_CONVERT_TYPE_NOTIFY_DOWNLOAD_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_NOTIFY_DOWNLOAD';
    public const AD_CONVERT_TYPE_FOLLOW_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_BUTTON_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_BUTTON';
    public const AD_CONVERT_TYPE_CREATE_GAMEROLE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CREATE_GAMEROLE';
    public const AD_CONVERT_TYPE_LOAN_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LOAN';
    public const AD_CONVERT_TYPE_LIVE_APPOINTMENT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_APPOINTMENT';
    public const AD_CONVERT_TYPE_CLASS_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLASS';
    public const AD_CONVERT_TYPE_PHONE_CONNECT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PHONE_CONNECT';
    public const AD_CONVERT_TYPE_PREMIUM_ROI_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PREMIUM_ROI';
    public const AD_CONVERT_TYPE_APP_ORDER_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_APP_ORDER';
    public const AD_CONVERT_TYPE_NATIVE_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_NATIVE_ACTION';
    public const AD_CONVERT_TYPE_WECHAT_REGISTER_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_WECHAT_REGISTER';
    public const AD_CONVERT_TYPE_RESERVATION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_RESERVATION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_LIVE_HOMEPAGE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_HOMEPAGE';
    public const AD_CONVERT_TYPE_QQ_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_QQ';
    public const AD_CONVERT_TYPE_MESSAGE_INTERACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE_INTERACTION';
    public const AD_CONVERT_TYPE_DIALBACK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_DIALBACK';
    public const AD_CONVERT_TYPE_POI_MULTIPLE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_POI_MULTIPLE';
    public const AD_CONVERT_TYPE_SHOPPING_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SHOPPING_ACTION';
    public const AD_CONVERT_TYPE_LOCATION_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LOCATION_ACTION';
    public const AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH';
    public const AD_CONVERT_TYPE_CONSULT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CONSULT';
    public const AD_CONVERT_TYPE_DEEP_PURCHASE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_DEEP_PURCHASE';
    public const AD_CONVERT_TYPE_PURCHASE_OF_GOODS_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PURCHASE_OF_GOODS';
    public const AD_CONVERT_TYPE_INVALID_CLUE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_INVALID_CLUE';
    public const AD_CONVERT_TYPE_WECHAT_USER_FIRST_MESSAGE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_WECHAT_USER_FIRST_MESSAGE';
    public const AD_CONVERT_TYPE_LIVE_OTO_PAY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_PAY';
    public const AD_CONVERT_TYPE_INSTALL_FINISH_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_INSTALL_FINISH';
    public const AD_CONVERT_TYPE_MESSAGE_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE_CLICK';
    public const AD_CONVERT_TYPE_UPDATE_LEVEL_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_UPDATE_LEVEL';
    public const AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_WECHAT_PAY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_WECHAT_PAY';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_PRE_LOAN_CREDIT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PRE_LOAN_CREDIT';
    public const AD_CONVERT_TYPE_BANKCARD_INFORMATION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_BANKCARD_INFORMATION';
    public const AD_CONVERT_TYPE_CLUE_INTERFLOW_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLUE_INTERFLOW';
    public const AD_CONVERT_TYPE_EFFECTIVE_COPY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_EFFECTIVE_COPY';
    public const AD_CONVERT_TYPE_FORM_CONNECT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FORM_CONNECT';
    public const AD_CONVERT_TYPE_NEXT_DAY_OPEN_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_NEXT_DAY_OPEN';
    public const AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION';
    public const AD_CONVERT_TYPE_REDIRECT_TO_SHOP_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_REDIRECT_TO_SHOP';
    public const AD_CONVERT_TYPE_SALES_LEAD_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SALES_LEAD';
    public const AD_CONVERT_TYPE_CLICK_CALL_DY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLICK_CALL_DY';
    public const AD_CONVERT_TYPE_FIRST_CLASS_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FIRST_CLASS';
    public const AD_CONVERT_TYPE_SHARE_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SHARE_ACTION';
    public const AD_CONVERT_TYPE_CONSULT_EFFECTIVE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CONSULT_EFFECTIVE';
    public const AD_CONVERT_TYPE_MAP_SEARCH_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MAP_SEARCH';
    public const AD_CONVERT_TYPE_MESSAGE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE';
    public const AD_CONVERT_TYPE_CLICK_LANDING_PAGE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLICK_LANDING_PAGE';
    public const AD_CONVERT_TYPE_LIVE_OTO_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_CLICK';
    public const AD_CONVERT_TYPE_PHONE_EFFECTIVE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PHONE_EFFECTIVE';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE';
    public const AD_CONVERT_TYPE_LIKE_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIKE_ACTION';
    public const AD_CONVERT_PAGE_VIEW_AdGetV2DataExternalAction = 'AD_CONVERT_PAGE_VIEW';
    public const AD_CONVERT_TYPE_DOWNLOAD_START_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_DOWNLOAD_START';
    public const AD_CONVERT_TYPE_UG_ROI_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_UG_ROI';
    public const AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN';
    public const AD_CONVERT_TYPE_LIVE_STAY_TIME_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_STAY_TIME';
    public const AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK';
    public const AD_CONVERT_TYPE_POI_ADDRESS_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_POI_ADDRESS_CLICK';
    public const AD_CONVERT_TYPE_PREMIUM_PAYMENT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PREMIUM_PAYMENT';
    public const AD_CONVERT_TYPE_INTENTION_CLUE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_INTENTION_CLUE';
    public const AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON';
    public const AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK';
    public const AD_CONVERT_TYPE_WECHAT_WECOM_ADD_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_WECHAT_WECOM_ADD';
    public const AD_CONVERT_TYPE_CLICK_NUM_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLICK_NUM';
    public const AD_CONVERT_TYPE_ENTER_HOMEPAGE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_ENTER_HOMEPAGE';
    public const AD_CONVERT_TYPE_DIALBACK_CONFIRM_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_DIALBACK_CONFIRM';
    public const AD_CONVERT_TYPE_COMMODITY_CLICK_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_COMMODITY_CLICK';
    public const AD_CONVERT_TYPE_PAY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PAY';
    public const AD_CONVERT_TYPE_REDIRECT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_REDIRECT';
    public const AD_CONVERT_TYPE_INTERACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_INTERACTION';
    public const AD_CONVERT_TYPE_FIRST_RENTAL_ORDER_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FIRST_RENTAL_ORDER';
    public const AD_CONVERT_TYPE_CERTIFICATION_INFORMATION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CERTIFICATION_INFORMATION';
    public const AD_CONVERT_TYPE_NOTIFY_FORM_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_NOTIFY_FORM';
    public const AD_CONVERT_TYPE_STAY_TIME_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_STAY_TIME';
    public const AD_CONVERT_TYPE_APP_UV_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_APP_UV';
    public const AD_CONVERT_TYPE_APP_DETAIL_UV_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_APP_DETAIL_UV';
    public const AD_CONVERT_TYPE_SUBMIT_CERTIFICATION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SUBMIT_CERTIFICATION';
    public const AD_CONVERT_TYPE_LOAN_COMPLETION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LOAN_COMPLETION';
    public const AD_CONVERT_TYPE_MESSAGE_CLUE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE_CLUE';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI';
    public const AD_CONVERT_TYPE_EFFECTIVE_PLAY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_EFFECTIVE_PLAY';
    public const AD_CONVERT_TYPE_VIEW_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_VIEW';
    public const AD_CONVERT_TYPE_MESSAGE_SERVICE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE_SERVICE';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_7_D_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI_7D';
    public const AD_CONVERT_TYPE_APP_CART_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_APP_CART';
    public const AD_CONVERT_TYPE_LIVE_GIFT_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_GIFT_ACTION';
    public const AD_CONVERT_TYPE_LOAN_CREDIT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LOAN_CREDIT';
    public const AD_CONVERT_TYPE_MESSAGE_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE_ACTION';
    public const AD_CONVERT_TYPE_SHOW_OFF_NUM_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SHOW_OFF_NUM';
    public const AD_CONVERT_TYPE_ACTIVE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_2_D_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI_2D';
    public const AD_CONVERT_TYPE_LOTTERY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LOTTERY';
    public const AD_CONVERT_TYPE_WECHAT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_WECHAT';
    public const AD_CONVERT_TYPE_IDCARD_INFORMATION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_IDCARD_INFORMATION';
    public const AD_CONVERT_TYPE_ARPU0_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_ARPU0';
    public const AD_CONVERT_TYPE_RSS_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_RSS';
    public const AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP';
    public const AD_CONVERT_TYPE_COMMENT_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_CLUE_HIGH_INTENTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLUE_HIGH_INTENTION';
    public const AD_CONVERT_TYPE_PHONE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_PHONE';
    public const AD_CONVERT_TYPE_REDIRECT_TO_STORE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_REDIRECT_TO_STORE';
    public const AD_CONVERT_TYPE_COUPON_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_COUPON';
    public const AD_CONVERT_TYPE_CLICK_SHOPWINDOW_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLICK_SHOPWINDOW';
    public const AD_CONVERT_TYPE_OTO_PAY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_OTO_PAY';
    public const AD_CONVERT_TYPE_POI_COLLECT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_POI_COLLECT';
    public const AD_CONVERT_TYPE_CLICK_WEBSITE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_CLICK_WEBSITE';
    public const AD_CONVERT_TYPE_LIVE_ENTER_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_ENTER_ACTION';
    public const AD_CONVERT_TYPE_DOWNLOAD_FINISH_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_DOWNLOAD_FINISH';
    public const AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS';
    public const AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT';
    public const AD_CONVERT_TYPE_AUTHORIZATION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_AUTHORIZATION';
    public const AD_CONVERT_TYPE_SUCCESSORDER_ACTION_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_VOTE_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_VOTE';
    public const AD_CONVERT_TYPE_LIVE_NATIVE_ACITON_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_NATIVE_ACITON';
    public const AD_CONVERT_TYPE_LIVE_JOIN_GROUP_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_LIVE_JOIN_GROUP';
    public const AD_CONVERT_TYPE_APP_PAY_AdGetV2DataExternalAction = 'AD_CONVERT_TYPE_APP_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_DIALBACK_CONNECT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_OTO_STAY_TIME_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLUE_CONFIRM_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_CART_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_RETENTION_7_D_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_XPATH_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_OTHER_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LINK_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_ANCHOR_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLUE_PAY_SUCCEED_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_IPU_QUALIFY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LT_ROI_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_FANS_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FORM_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FORM_DEEP_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MULTIPLE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PAID_CLUE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PHONE_CONFIRM_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_BOOST_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_HIGH_VALUE_CLUE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLICK_DOWNLOAD_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_APPLET_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FORM_ANSWER_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PERSONAL_INFORMATION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_CLUE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_GAME_ADDICTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_UPGEADE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_RETENTION_DAYS_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_NOTIFY_DOWNLOAD_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_BUTTON_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CREATE_GAMEROLE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LOAN_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_APPOINTMENT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLASS_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PHONE_CONNECT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_ROI_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_APP_ORDER_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_NATIVE_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_REGISTER_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_RESERVATION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_HOMEPAGE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_QQ_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_INTERACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_DIALBACK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_POI_MULTIPLE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LOCATION_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_DEEP_PURCHASE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_OF_GOODS_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_INVALID_CLUE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_USER_FIRST_MESSAGE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_PAY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_INSTALL_FINISH_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_UPDATE_LEVEL_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_PAY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PRE_LOAN_CREDIT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_BANKCARD_INFORMATION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLUE_INTERFLOW_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_EFFECTIVE_COPY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FORM_CONNECT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_NEXT_DAY_OPEN_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_TO_SHOP_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SALES_LEAD_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLICK_CALL_DY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FIRST_CLASS_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SHARE_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_EFFECTIVE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MAP_SEARCH_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLICK_LANDING_PAGE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PHONE_EFFECTIVE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIKE_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_PAGE_VIEW_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_DOWNLOAD_START_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_UG_ROI_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_STAY_TIME_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_POI_ADDRESS_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_PAYMENT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_INTENTION_CLUE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_WECOM_ADD_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLICK_NUM_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_ENTER_HOMEPAGE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_DIALBACK_CONFIRM_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_COMMODITY_CLICK_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PAY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_INTERACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FIRST_RENTAL_ORDER_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CERTIFICATION_INFORMATION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_NOTIFY_FORM_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_STAY_TIME_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_APP_UV_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_APP_DETAIL_UV_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SUBMIT_CERTIFICATION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LOAN_COMPLETION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_CLUE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_EFFECTIVE_PLAY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_VIEW_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_SERVICE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_7_D_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_APP_CART_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_GIFT_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LOAN_CREDIT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SHOW_OFF_NUM_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_2_D_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LOTTERY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_IDCARD_INFORMATION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_ARPU0_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_RSS_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_COMMENT_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLUE_HIGH_INTENTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_PHONE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_TO_STORE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_COUPON_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLICK_SHOPWINDOW_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_OTO_PAY_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_POI_COLLECT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_CLICK_WEBSITE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ENTER_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_DOWNLOAD_FINISH_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_AUTHORIZATION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_SUCCESSORDER_ACTION_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_VOTE_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_NATIVE_ACITON_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_LIVE_JOIN_GROUP_AdGetV2DataExternalAction,
        self::AD_CONVERT_TYPE_APP_PAY_AdGetV2DataExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataExternalAction', $value));
        }
        return (string) $value;
    }
}
