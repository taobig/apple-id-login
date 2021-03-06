<?php

use taobig\apple\IdentityTokenChecker;

class IdentityTokenCheckerTest extends TestCase
{

    public function testUnexpectedValueException()
    {
        $this->expectException(UnexpectedValueException::class);
        $token = 'eyJraWQiOiJBSURPUEsxIiwiYWxnIjoiUlMyNTYifQ.eyJpc3MiOiJodHRwczovL2FwcGxlaWQuYXBwbGUuY29tIiwiYXVkIjoiY29tLnRlbmNlbnQucXFtdXNpY2JhYnkuZCIsImV4cCI6MTU3MDYxNTU3NywiaWF0IjoxNTcwNjE0OTc3LCJzdWIiOiIwMDA2NTcuNjY1NjJkM2IxMWJjNDAzMDk5YjFjZGI0OTQ3YzFkM2MuMTE0MiIsImF0X2hhc2giOiJibFQ3UTFNMDF1NW12Y0ZVZ1JIZGR3IiwiYXV0aF90aW1lIjoxNTcwNjE0OTI0fQ.TXpunnl6hlJs8C9_W7k-LeJ3Lm_otBeLoJxwe1C2oufKmMWxlANu0KI2-LnTcHYx23npMY3swk4fM46W5Vt9ursllz27P4zR8H1eoZ2Tj-3O3rTz8lqC1uI-mMo_a6VxqXvNmqenre5S0CyaUHAI1_Um9798b4ehduJqDtYVYIbftYIpiXBAW-vGjEbBnjWkHw_7HmjEWrsc0vfPhHGXyUMFmon4VhMBzzY2Nq0LIF4NP9Aa_9dyTzdEaqNfPjdSbFCVaJcTI_rxrIbooh18UbdowsFJtnLKsTZ7ePYtz3uBIaWUaiwJI1oU6ZeAb6uAzHl7TV2DdB9UkHDJe960hg';
        /** @var taobig\apple\model\Token $obj */
        $obj = IdentityTokenChecker::checkAppleIdentityToken($token);
        var_dump($obj->email);
        var_dump(date('Y-m-d H:i:s', $obj->exp));
        var_dump($obj);
    }

}