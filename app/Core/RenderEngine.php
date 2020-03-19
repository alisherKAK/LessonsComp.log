<?php


namespace Step\Core;

use SmartyBC;

class RenderEngine extends SmartyBC
{
    protected static $instance;

    public function __construct()
    {
        parent::__construct();

        $path = config('app.views_path');
        $this->setTemplateDir($path );
        $this->setCompileDir($path . DIRECTORY_SEPARATOR. '_compiled');

        $this->assign('auth', Auth::check());
        $this->assign('app', config('app'));
        $this->assign('user', Auth::user());
    }

    static function instance(): self {
        if(!static::$instance instanceof self)
            static::$instance = new self();

        return self::$instance;
    }
}