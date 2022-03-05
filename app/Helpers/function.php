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
        if (strrpos($url,$key,$last_point)&&strlen($key)==(strrpos($url,'=',strpos($url,$key,$last_point))-strrpos($url,$key,$last_point)))
           return $url = substr($url,0,strrpos($url,$key,$last_point)+strlen($key)+1). $value
                   .(strrpos($url,'&',strrpos($url,$key,$last_point)+strlen(strrpos($url,$key,$last_point)))?
                   substr($url,strrpos($url,'&',strrpos($url,$key,$last_point)
                   +strlen(strrpos($url,$key,$last_point))),strlen($url)) :'');
        }while($last_point=strrpos($url,$key,$last_point+strlen($key)));
       return $url=$url.'&'.$key.'='.$value;
    }
    else
       return $url=$url.'?'.$key.'='.$value;
}
