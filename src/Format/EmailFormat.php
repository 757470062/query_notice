<?php
/**
 * Created by PhpStorm.
 * User: huangangui
 * Date: 2018/2/24
 * Time: 下午1:52
 */

namespace BugsLife\QueryNotice\Format;


use App\Libraries\QueryNotice\Mail\QueryNoticeMail;
use Illuminate\Support\Facades\Mail;

class EmailFormat extends Format
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