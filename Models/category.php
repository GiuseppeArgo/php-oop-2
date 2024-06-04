<?php

class Category {
    private string $name;
    private string $icon;

    public function __construct(string $name) {
        $this->name = $name;
    }
    
    /**
     * Get the value of name
     * @return string
     */ 
    public function getName(): string {
        return $this->name;
    }

    /**
     * Get the value of icon
     * @return string
     */ 
    public function getIcon(): string {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *@return  self
     */ 
    public function setIcon(string $icon) {
        $this->icon = $icon;

        return $this;
    }
}