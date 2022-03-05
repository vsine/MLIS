<?php
/**
 * @param $key
 * @param $value
 * @return false|string
 * @developer Xiaowen Mao.
 */
function setParams($key,$value){
    $url=URL::full();
    if (strpos($url,'?'))
        if (strpos($url,$key)&&strlen($key)==(strrpos($url,'=',strpos($url,$key))-strpos($url,$key)))
            $url = substr($url,0,strrpos($url,$key)+strlen($key)+1). $value
                   .(strrpos($url,'&',strrpos($url,$key)+strlen(strrpos($url,$key)))?
                   substr($url,strrpos($url,'&',strrpos($url,$key)
                   +strlen(strrpos($url,$key))),strlen($url)) :'');
        else
            $url=$url.'&'.$key.'='.$value;
    else
        $url=$url.'?'.$key.'='.$value;
    return $url;
}
