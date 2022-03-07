// 添加 或者 修改 url中参数的值
function UpdateUrlParam(name, val) {
    var thisURL = document.location.href;

    // 如果 url中包含这个参数 则修改
    if (thisURL.indexOf(name+'=') > 0) {
        var v = getUrlParam(name);
        if (v != null) {
            // 是否包含参数
            thisURL = thisURL.replace(name + '=' + v, name + '=' + val);

        }
        else {
            thisURL = thisURL.replace(name + '=', name + '=' + val);
        }

    } // 不包含这个参数 则添加
    else {
        if (thisURL.indexOf("?") > 0) {
            thisURL = thisURL + "&" + name + "=" + val;
        }
        else {
            thisURL = thisURL + "?" + name + "=" + val;
        }
    }
    location.href = thisURL;

};
