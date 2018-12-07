define({ "api": [
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "./public/Apidoc/main.js",
    "group": "D__wwwroot_mylaravel_public_Apidoc_main_js",
    "groupTitle": "D__wwwroot_mylaravel_public_Apidoc_main_js",
    "name": ""
  },
  {
    "type": "get",
    "url": "/api/index",
    "title": "今天进行",
    "description": "<p>今天进行</p>",
    "group": "G_____",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>header传此值</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "请求参数格式:",
          "content": "/api/index/todaygamenum",
          "type": "string"
        }
      ]
    },
    "version": "1.0.0",
    "error": {
      "examples": [
        {
          "title": "错误返回值:",
          "content": "{\n    \"return_code\": \"SUCCESS\",\n    \"request\": \"http://www.ppasphp.com:8025/api/index/todaygamenum\",\n    \"message\": \"接口请求错误\",\n    \"error_code\": 400113,\n    \"api_code\": 400113,\n    \"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "正确返回值:",
          "content": "{\n\"return_code\": \"SUCCESS\",\n\"request\": \"http://www.ppasphp.com:8025/api/index/todaygamenum\",\n\"message\": \"成功\",\n\"is_error\": false,\n\"data\": {\n\"hdnum\": 0,\n\"ssnum\": 1,\n\"pxnum\": 0\n}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/apidoc/Person.php",
    "groupTitle": "G_____",
    "name": "GetApiIndex"
  },
  {
    "type": "get",
    "url": "/api/index/test",
    "title": "今天进行1",
    "description": "<p>今天进行1</p>",
    "group": "G_____",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>header传此值</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "请求参数格式:",
          "content": "/api/index/todaygamenum",
          "type": "string"
        }
      ]
    },
    "version": "1.0.0",
    "error": {
      "examples": [
        {
          "title": "错误返回值:",
          "content": "{\n    \"return_code\": \"SUCCESS\",\n    \"request\": \"http://www.ppasphp.com:8025/api/index/todaygamenum\",\n    \"message\": \"接口请求错误\",\n    \"error_code\": 400113,\n    \"api_code\": 400113,\n    \"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "正确返回值:",
          "content": "{\n\"return_code\": \"SUCCESS\",\n\"request\": \"http://www.ppasphp.com:8025/api/index/todaygamenum\",\n\"message\": \"成功\",\n\"is_error\": false,\n\"data\": {\n\"hdnum\": 0,\n\"ssnum\": 1,\n\"pxnum\": 0\n}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/apidoc/test.php",
    "groupTitle": "G_____",
    "name": "GetApiIndexTest"
  },
  {
    "type": "get",
    "url": "/user/:id",
    "title": "Request User information",
    "name": "GetPerson",
    "group": "pserson",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Users unique ID.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "firstname",
            "description": "<p>Firstname of the User.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "lastname",
            "description": "<p>Lastname of the User.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Other/PersonController.php",
    "groupTitle": "pserson"
  }
] });
