<?php
class View
{
    public $template_view = "layout"; 
    
    function template($content_view, $data = null)
    {
        
        if(is_array($data)) {
            
            extract($data);
        }
        unset($data);
        
        
        
        
        include 'apps/view/'.$this->template_view.".tpl";
    }
}