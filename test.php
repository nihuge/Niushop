<?php
/**
 * Created by PhpStorm.
 * User: nihuge
 * Date: 2019/5/4
 * Time: 10:11
 */
$rest = '{"gmt_create":"2019-05-04 10:08:30","charset":"utf-8","gmt_payment":"2019-05-04 10:08:38","notify_time":"2019-05-04 10:08:39","subject":"\u6d4b\u8bd5\u5546\u57ce-\u7537\u58ebT\u6064\u886b","sign":"GgLiIOxKsKQ1o6ZpMLyCRCSEpJYpr+36f9H9xDU2TkoHpeiWrsG8IfwmpzFgzfAD2YIk9W9ohSyZffRM\/wTQ3IqduaTdWuyxWf0N+7lZgaz07shJ\/gFT+lj7ud5JYG\/sWqnwSV6iMQsTaxVBzS+8Kk3X0\/kemRVrVIB7R0isjQChioTbTJ41iYcnU3EqNRZIPgSZuXGsSwXau9Qvugme7wBjhBMPGKpQeb+ruV2LbqpZ8YXSfPKsrOpZwnIy5gzuY4i4eC2tTqS9I9IaiptmWpN5FXXrDc\/3iO8kTvYsu0C4HyYJspAzP5E0H4VWJMmDzSI\/NLwMgFslNmfeLZeblQ==","buyer_id":"2088102177951672","body":"\u6d4b\u8bd5\u5546\u57ce-\u7537\u58ebT\u6064\u886b","invoice_amount":"10000.00","version":"1.0","notify_id":"2019050400222100838051671000152816","fund_bill_list":"[{\"amount\":\"10000.00\",\"fundChannel\":\"ALIPAYACCOUNT\"}]","notify_type":"trade_status_sync","out_trade_no":"155693560050981000","total_amount":"10000.00","trade_status":"TRADE_SUCCESS","trade_no":"2019050422001451671000017389","auth_app_id":"2016100100638721","receipt_amount":"10000.00","point_amount":"0.00","app_id":"2016100100638721","buyer_pay_amount":"10000.00","sign_type":"RSA2","seller_id":"2088102178090060"}';
print_r(json_decode($rest,true));