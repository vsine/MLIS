<?php
/**
 * @param $key
 * @param $value
 * @return false|string
 * @developer Xiaowen Mao.
 */
function setParams($key,$value){
    $url=URL::full();
    $last_point=0;
    if (strpos($url,'?')){
        do{
        if (strpos($url,$key,$last_point)&&strlen($key)==(strpos($url,'=',strpos($url,$key,$last_point))-strpos($url,$key,$last_point)))
           return $url = substr($url,0,strpos($url,$key,$last_point)+strlen($key)+1). $value
                   .(strpos($url,'&',strpos($url,$key,$last_point)+strlen(strpos($url,$key,$last_point)))?
                   substr($url,strpos($url,'&',strpos($url,$key,$last_point)
                   +strlen(strpos($url,$key,$last_point))),strlen($url)) :'');
        }while($last_point=strpos($url,$key,$last_point+strlen($key)));
       return $url=$url.'&'.$key.'='.$value;
    }
    else
       return $url=$url.'?'.$key.'='.$value;
}
