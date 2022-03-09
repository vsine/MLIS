function delParam(paramKey) {
    var url = window.location.href;    //页面url
    var urlParam = window.location.search.substr(1);   //页面参数
    var beforeUrl = url.substr(0, url.indexOf("?"));   //页面主地址（参数之前地址）
    var nextUrl = "";

    var arr = new Array();
    if (urlParam != "") {
        var urlParamArr = urlParam.split("&"); //将参数按照&符分成数组
        for (var i = 0; i < urlParamArr.length; i++) {
            var paramArr = urlParamArr[i].split("="); //将参数键，值拆开
            //如果键雨要删除的不一致，则加入到参数中
            if (paramArr[0] != paramKey) {
                arr.push(urlParamArr[i]);
            }
        }
    }
    if (arr.length > 0) {
        nextUrl = "?" + arr.join("&");
    }
    url = beforeUrl + nextUrl;
    return url;
}



function changeURLArg(url,arg,arg_val){
    var pattern=arg+'=([^&]*)';
    var replaceText=arg+'='+arg_val;
    if(url.match(pattern)){
        var tmp='/('+ arg+'=)([^&]*)/gi';
        if(arg_val!='')
        tmp=url.replace(eval(tmp),replaceText);
        else tmp=delParam(arg);
        return tmp;
    }else{
        if(url.match('[\?]')){
            if(arg_val!=''||arg_val!=false)
            return url+'&'+replaceText;
            else return  url;
        }else{
            if(arg_val!=''||arg_val!=false)
            return url+'?'+replaceText;
            else return  url;
        }
    }
   return url+'\n'+arg+'\n'+arg_val;
}
function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r =decodeURI( window.location.search).substr(1).match(reg); //匹配目标参数
    if (r != null) return unescape(r[2]); return null; //返回参数值
}
