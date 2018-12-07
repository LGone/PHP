<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/7
 * Time: 15:18
 */
/**
 * @api {get} /api/athlete/AthleteList AthleteList
 * @apiDescription 运动员注册API
 * @apiGroup T1_API

 * @apiParamExample {string} 请求参数格式:
 *    /api/athlete/AthleteList
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/athlete/AthleteList",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
    {
        "return_code": "SUCCESS",
        "request": "http://www.qq.com:8000/api/athlete/AthleteList",
        "message": "成功",
        "is_error": false,
        "data": [{
        "F_ID": 8,
        "F_Name": "fajlfjdalkfjdakl",
        "F_Gender": 1,
        "F_BodyCode": "431122199505123812",
        "F_Birthday": "19950512",
        "F_NationID": 101,
        "F_SubdivisionID": 1001,
        "F_EventID": 11,
        "F_LevelID": "1",
        "F_RegCode": "TianJing",
        "F_EffectiveDate": "4",
        "F_Issuingauthority": "体育局",
        "F_Address": "湖南",
        "F_Blood": "AB",
        "F_UnitCode": "A1000001",
        "F_Phone": "13789223747",
        "F_AgeBone": "12",
        "F_Address2": "上海",
        "F_Photo": "/Reg_Athlete",
        "F_UnitID": 1,
        "F_FisrtUnit": 1,
        "F_TrainingUnit": 1,
        "F_Remark": null,
        "F_UserID": 1,
        "F_Date": 2018
        }]
    }
 */

/**
 * @api {get} /api/athlete/AthleteListPage AthleteListPage
 * @apiDescription 运动员注册API
 * @apiGroup T1_API
 * @apiParam {String}  page  每页5条

 * @apiParamExample {string} 请求参数格式:
 *    /api/athlete/AthleteListPage?page=1
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/athlete/AthleteListPage",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
    {
        "return_code": "SUCCESS",
        "request": "http://www.qq.com:8000/api/athlete/AthleteListPage",
        "message": "成功",
        "is_error": false,
        "data": [{
        "F_ID": 8,
        "F_Name": "fajlfjdalkfjdakl",
        "F_Gender": 1,
        "F_BodyCode": "431122199505123812",
        "F_Birthday": "19950512",
        "F_NationID": 101,
        "F_SubdivisionID": 1001,
        "F_EventID": 11,
        "F_LevelID": "1",
        "F_RegCode": "TianJing",
        "F_EffectiveDate": "4",
        "F_Issuingauthority": "体育局",
        "F_Address": "湖南",
        "F_Blood": "AB",
        "F_UnitCode": "A1000001",
        "F_Phone": "13789223747",
        "F_AgeBone": "12",
        "F_Address2": "上海",
        "F_Photo": "/Reg_Athlete",
        "F_UnitID": 1,
        "F_FisrtUnit": 1,
        "F_TrainingUnit": 1,
        "F_Remark": null,
        "F_UserID": 1,
        "F_Date": 2018
        }]
    }
 */


/**
 * @api {get} /api/athlete/AthleteListSel AthleteListSel
 * @apiDescription 运动员注册API
 * @apiGroup T1_API
 * @apiParam {String}  F_Name  运动员姓名
 * @apiParam {String}  F_Address 运动员户籍地址

 * @apiParamExample {string} 请求参数格式:
 *    /api/athlete/AthleteListSel?F_Name=go&F_Address=湖
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/athlete/AthleteListSel",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
    {
        "return_code": "SUCCESS",
        "request": "http://www.qq.com:8000/api/athlete/AthleteListSel?F_Name=go",
        "message": "成功",
        "is_error": false,
        "data": [{
        "F_ID": 5,
        "F_Name": "gogogogogo",
        "F_Gender": 1,
        "F_BodyCode": "431122199505123812",
        "F_Birthday": "19950512",
        "F_NationID": 101,
        "F_SubdivisionID": 1001,
        "F_EventID": 11,
        "F_LevelID": "1",
        "F_RegCode": "TianJing",
        "F_EffectiveDate": "4",
        "F_Issuingauthority": "体育局",
        "F_Address": "湖南",
        "F_Blood": "AB",
        "F_UnitCode": "A1000001",
        "F_Phone": "13789223747",
        "F_AgeBone": "12",
        "F_Address2": "上海",
        "F_Photo": "/Reg_Athlete",
        "F_UnitID": 1,
        "F_FisrtUnit": 1,
        "F_TrainingUnit": 1,
        "F_Remark": null,
        "F_UserID": 1,
        "F_Date": 2018
        }]
    }
 */

/**
 * @api {post} /api/athlete/InsertAthlete InsertAthlete
 * @apiDescription 运动员注册API
 * @apiGroup T1_API
 * @apiParam {String}  F_Name    姓名
 * @apiParam {int}  F_Gender  性别
 * @apiParam {String}  F_BodyCode  身份证号
 * @apiParam {String}  F_Birthday  生日
 * @apiParam {int}  F_NationID  民族
 * @apiParam {int}  F_SubdivisionID  所在地
 * @apiParam {int}  F_EventID  在训项目
 * @apiParam {String}  F_LevelID  运动员等级
 * @apiParam {String}  F_RegCode  注册证号
 * @apiParam {String}  F_EffectiveDate  有效期
 * @apiParam {String}  F_Issuingauthority  发证机关
 * @apiParam {String}  F_Address  户籍地址
 * @apiParam {String}  F_Blood  血型
 * @apiParam {String}  F_UnitCode  学籍卡号
 * @apiParam {String}  F_Phone  联系方式
 * @apiParam {String}  F_AgeBone  当前骨龄值
 * @apiParam {String}  F_Address2  现在家庭住址
 * @apiParam {String}  F_Photo  照片路径
 * @apiParam {int}  F_UnitID  注册单位
 * @apiParam {int}  F_FisrtUnit  原始单位
 * @apiParam {int}  F_TrainingUnit  在训单位
 * @apiParam {String}  F_Remark  备注
 * @apiParam {int}  F_UserID  创建人
 * @apiParam {int}  F_Date  创建时间

 * @apiParamExample {string} 请求参数格式:
 *    /api/athlete/InsertAthlete?F_Name=hahahhahahahhaha&F_Gender=1&F_BodyCode=431122199505123812&F_Birthday=19950512&F_NationID=101&F_SubdivisionID=1001&F_EventID=11&F_LevelID=1&F_RegCode=TianJing&F_EffectiveDate=4&F_Issuingauthority=%E4%BD%93%E8%82%B2%E5%B1%80&F_Address=%E6%B9%96%E5%8D%97&F_Blood=AB&F_UnitCode=A1000001&F_Phone=13789223747&F_AgeBone=12&F_Address2=%E4%B8%8A%E6%B5%B7&F_Photo=/Reg_Athlete&F_UnitID=1&F_FisrtUnit=1&F_TrainingUnit=1&F_Remark&F_UserID=1&F_Date=2018
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/athlete/InsertAthlete",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
    {
        "return_code": "SUCCESS",
        "request": "http://www.qq.com:8000/api/athlete/InsertAthlete?F_Name=hahahhahahahhaha&F_Gender=1&F_BodyCode=431122199505123812&F_Birthday=19950512&F_NationID=101&F_SubdivisionID=1001&F_EventID=11&F_LevelID=1&F_RegCode=TianJing&F_EffectiveDate=4&F_Issuingauthority=%E4%BD%93%E8%82%B2%E5%B1%80&F_Address=%E6%B9%96%E5%8D%97&F_Blood=AB&F_UnitCode=A1000001&F_Phone=13789223747&F_AgeBone=12&F_Address2=%E4%B8%8A%E6%B5%B7&F_Photo=/Reg_Athlete&F_UnitID=1&F_FisrtUnit=1&F_TrainingUnit=1&F_Remark&F_UserID=1&F_Date=2018",
        "message": "成功",
        "is_error": false,
        "data": {
        "F_Name": "hahahhahahahhaha",
        "F_Gender": "1",
        "F_BodyCode": "431122199505123812",
        "F_Birthday": "19950512",
        "F_NationID": "101",
        "F_SubdivisionID": "1001",
        "F_EventID": "11",
        "F_LevelID": "1",
        "F_RegCode": "TianJing",
        "F_EffectiveDate": "4",
        "F_Issuingauthority": "体育局",
        "F_Address": "湖南",
        "F_Blood": "AB",
        "F_UnitCode": "A1000001",
        "F_Phone": "13789223747",
        "F_AgeBone": "12",
        "F_Address2": "上海",
        "F_Photo": "/Reg_Athlete",
        "F_UnitID": "1",
        "F_FisrtUnit": "1",
        "F_TrainingUnit": "1",
        "F_Remark": null,
        "F_UserID": "1",
        "F_Date": "2018",
        "id": 9
    }
    }
}
 */

/**
 * @api {post} /api/athlete/UpdateAthlete UpdateAthlete
 * @apiDescription 运动员注册API
 * @apiGroup T1_API
 * @apiParam {int}  F_ID    主键ID
 * @apiParam {String}  F_Name    姓名
 * @apiParam {int}  F_Gender  性别
 * @apiParam {String}  F_BodyCode  身份证号
 * @apiParam {String}  F_Birthday  生日
 * @apiParam {int}  F_NationID  民族
 * @apiParam {int}  F_SubdivisionID  所在地
 * @apiParam {int}  F_EventID  在训项目
 * @apiParam {String}  F_LevelID  运动员等级
 * @apiParam {String}  F_RegCode  注册证号
 * @apiParam {String}  F_EffectiveDate  有效期
 * @apiParam {String}  F_Issuingauthority  发证机关
 * @apiParam {String}  F_Address  户籍地址
 * @apiParam {String}  F_Blood  血型
 * @apiParam {String}  F_UnitCode  学籍卡号
 * @apiParam {String}  F_Phone  联系方式
 * @apiParam {String}  F_AgeBone  当前骨龄值
 * @apiParam {String}  F_Address2  现在家庭住址
 * @apiParam {String}  F_Photo  照片路径
 * @apiParam {int}  F_UnitID  注册单位
 * @apiParam {int}  F_FisrtUnit  原始单位
 * @apiParam {int}  F_TrainingUnit  在训单位
 * @apiParam {String}  F_Remark  备注
 * @apiParam {int}  F_UserID  创建人
 * @apiParam {int}  F_Date  创建时间

 * @apiParamExample {string} 请求参数格式:
 *    /api/athlete/UpdateAthlete?F_Name=201819&F_Gender=1&F_BodyCode=431122199505123812&F_Birthday=19950512&F_NationID=101&F_SubdivisionID=1001&F_EventID=11&F_LevelID=1&F_RegCode=TianJing&F_EffectiveDate=4&F_Issuingauthority=%E4%BD%93%E8%82%B2%E5%B1%80&F_Address=%E6%B9%96%E5%8D%97&F_Blood=AB&F_UnitCode=A1000001&F_Phone=13789223747&F_AgeBone=12&F_Address2=%E4%B8%8A%E6%B5%B7&F_Photo=/Reg_Athlete&F_UnitID=1&F_FisrtUnit=1&F_TrainingUnit=1&F_Remark&F_UserID=1&F_Date=2018&F_ID=9
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/athlete/UpdateAthlete",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
    {
        "return_code": "SUCCESS",
        "request": "http://www.qq.com:8000/api/athlete/UpdateAthlete?F_Name=201819&F_Gender=1&F_BodyCode=431122199505123812&F_Birthday=19950512&F_NationID=101&F_SubdivisionID=1001&F_EventID=11&F_LevelID=1&F_RegCode=TianJing&F_EffectiveDate=4&F_Issuingauthority=%E4%BD%93%E8%82%B2%E5%B1%80&F_Address=%E6%B9%96%E5%8D%97&F_Blood=AB&F_UnitCode=A1000001&F_Phone=13789223747&F_AgeBone=12&F_Address2=%E4%B8%8A%E6%B5%B7&F_Photo=/Reg_Athlete&F_UnitID=1&F_FisrtUnit=1&F_TrainingUnit=1&F_Remark&F_UserID=1&F_Date=2018&F_ID=9",
        "message": "成功",
        "is_error": false,
        "data": 1
    }
}
 */

/**
 * @api {post} /api/athlete/DeleteAthlete DeleteAthlete
 * @apiDescription 运动员注册API
 * @apiGroup T1_API
 * @apiParam {int}  F_ID    主键ID


 * @apiParamExample {string} 请求参数格式:
 *    /api/athlete/DeleteAthlete?F_ID=10
 *
 * @apiVersion 1.0.0
 * @apiErrorExample {json} 错误返回值:
 *  {
 *      "return_code": "SUCCESS",
 *      "request": "http://www.qq.com:8000/api/athlete/DeleteAthlete",
 *      "message": "接口请求错误",
 *      "error_code": 400113,
 *      "api_code": 400113,
 *      "data": []
 *  }
 * @apiSuccessExample {json} 正确返回值:
    {
        "return_code": "SUCCESS",
        "request": "http://www.qq.com:8000/api/athlete/DeleteAthlete?F_ID=10",
        "message": "成功",
        "is_error": false,
        "data": 1
    }
}
 */

?>