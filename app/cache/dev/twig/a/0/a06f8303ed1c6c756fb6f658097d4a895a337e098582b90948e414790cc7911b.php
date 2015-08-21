<?php

/* default/index.html.twig */
class __TwigTemplate_a06f8303ed1c6c756fb6f658097d4a895a337e098582b90948e414790cc7911b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31328c10e8a151e8a6097be3c257f4ac10173bdad1c5ea6971995bdfffba5fcc = $this->env->getExtension("native_profiler");
        $__internal_31328c10e8a151e8a6097be3c257f4ac10173bdad1c5ea6971995bdfffba5fcc->enter($__internal_31328c10e8a151e8a6097be3c257f4ac10173bdad1c5ea6971995bdfffba5fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31328c10e8a151e8a6097be3c257f4ac10173bdad1c5ea6971995bdfffba5fcc->leave($__internal_31328c10e8a151e8a6097be3c257f4ac10173bdad1c5ea6971995bdfffba5fcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fd7781941cf06f2c52049415e83542bc9091d63acec39508a36b07203d32673 = $this->env->getExtension("native_profiler");
        $__internal_6fd7781941cf06f2c52049415e83542bc9091d63acec39508a36b07203d32673->enter($__internal_6fd7781941cf06f2c52049415e83542bc9091d63acec39508a36b07203d32673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-01\">
                <span class=\"sr-only\">Toggle navigation</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Nombre</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-01\">

            <form class=\"navbar-form navbar-right\" action=\"#\" role=\"search\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <input class=\"form-control\" id=\"navbarInput-01\" type=\"search\" placeholder=\"Search\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn\"><span class=\"fui-search\"></span></button>
          </span>
                    </div>
                </div>
            </form>
        </div><!-- /.navbar-collapse -->
    </nav><!-- /navbar -->
    <div class=\"container\">

        <h1>Hello, world!</h1>
    </div>
    <!-- /.container -->

";
        
        $__internal_6fd7781941cf06f2c52049415e83542bc9091d63acec39508a36b07203d32673->leave($__internal_6fd7781941cf06f2c52049415e83542bc9091d63acec39508a36b07203d32673_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
