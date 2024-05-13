<?php

class Form{

    private $action;
    private $method;
    private $fields = [];

    public function __construct($action = '#', $method = 'POST')
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function addField($type, $name, $label = ''){
        $this->fields[] =[
            'type' => $type,
            'name' => $name,
            'label' => $label,
        ];
    }

    public function generateForm(){
        $html = '<form action="' . $this->action . '" method="'. $this->method .'">';

        foreach ($this->fields as $field){
            $html .= $this->generateField($field);
        }
        $html .= '</form>';
        return $html;
    }


    private function generateField($field){
        $type = $field['type'];
        $name = $field['name'];
        $label = $field['label'];

        $html = '<div>';

        if(!empty($label)){
            $html .= "<label for='". $name ."'>". $label ."</label><br>";
        }

        $html .=  '<input type= "' . $type. '" name="' . $name.'"';

         $html .= '</div>';
         return $html;
    }

}