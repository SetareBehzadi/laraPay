<?php

class JsonOutput implements ReporterOutput
{

    public function renderOutPut($data)
    {
       if(is_array($data)){
           return json_encode($data);
       }
       return  null;
    }
}
