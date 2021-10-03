<?php

class HTMLOutput implements ReporterOutput
{

    public function renderOutPut($data)
    {
        return "<a>{$data}<a/>";
    }
}
