<?php

class StrUtils {
    private string $str;

public function __construct(string $str){
    $this ->setStr($str);
}

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * apply bold
     * @return string
     */
    public function bold() : string{
        return "<span style='font-weight: bold'>".$this->getStr()."</span>";
    }

    /**
     * apply italic
     * @return string
     */
    public function italic() : string{
        return "<span style='font-style: italic'>".$this->getStr()."</span>";
    }

    /**
     * apply underline
     * @return string
     */
    public function underline() : string{
        return "<span style='text-decoration-line: underline'>".$this->getStr()."</span>";
    }

    /**
     * apply capitalize
     * @return string
     */
    public function capitalize() : string{
        return "<span style='text-transform: capitalize'>".$this->getStr()."</span>";
    }

    public function uglify() :string {
        return "<span style='text-decoration: underline; text-transform: capitalize'><bold><i>$this->str</i></bold></span>";
    }
}