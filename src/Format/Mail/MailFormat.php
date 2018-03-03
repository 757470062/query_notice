<?php
/**
 * Created by PhpStorm.
 * User: huangangui
 * Date: 2018/3/3
 * Time: 下午6:03
 */

namespace BugsLife\QueryNotice\Format\Mail;

use BugsLife\QueryNotice\Format\Format;
use Illuminate\Support\Facades\Mail;

class MailFormat extends Format
{
    /**
     * Start use this format notice sql query.
     * @param $notice
     * @return mixed
     */
    public function run($notice)
    {
        Mail::to('757470062@qq.com')->send(new QueryNoticeMail($notice));
    }
}