<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/6
 * Time: 16:42
 */

/**
 * @api {get} /api/index PersonList
 * @apiDescription PersonList
 * @apiGroup PersonAPI
 * @apiParam {String}  token header传此值

 * @apiParamExample {string} 请求参数格式:
 *    /api/index
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/other/PersonList",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
        {
        "return_code": "SUCCESS",
        "request": "http://www.qq.com:8000/api/other/PersonList",
        "message": "成功",
        "is_error": false,
        "data": [{
                "uid": 6,
                "uname": "太阳",
                "upwd": "123",
                "uage": 20,
                "usex": "男",
                "uphone": "15555555555",
                "uaddress": "北京二环"
                }]
}
 */

/**
 * @api {post} /api/index InsertPerson
 * @apiDescription InsertPerson
 * @apiGroup PersonAPI
 * @apiParam {String}  token header传此值

 * @apiParamExample {string} 请求参数格式:
 *    /api/index
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/other/PersonList",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
{
"return_code": "SUCCESS",
"request": "http://www.qq.com:8000/api/other/PersonList",
"message": "成功",
"is_error": false,
"data": [{
"uid": 6,
"uname": "太阳",
"upwd": "123",
"uage": 20,
"usex": "男",
"uphone": "15555555555",
"uaddress": "北京二环"
}]
}
 */

?>