<?php

/**
 * SMSGatewayCenter - Check Expiry API
 *
 * @package  SMSGatewayCenter
 * @version  1.0.0
 * @author   psmpl <psmpl@psmpl.com>
 * @api      <https://www.smsgateway.center/docs/api/>
 * @license  <https://www.smsgateway.center> (SMSGatewayCenter)
*/

include("../psmpl_smsgatewaycenter.api.class.php");

/**
 * Check Expiry Self
 *
 */
$smsgatewaycenter = new psmplSMSGatewayCenter("YourUsername", "YourPassword");//Your username and password
$smsgatewaycenter->setFormat(psmplSMSGatewayCenter::FORMAT_JSON);
$smsgatewaycenter->checkBasic(psmplSMSGatewayCenter::LIBAPI,"self/CheckExpiry/");
echo $smsgatewaycenter->getResponse();
