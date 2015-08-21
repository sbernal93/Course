<?php

/* base.html.twig */
class __TwigTemplate_2359485139a371edcaf1d6c3e566f20f97e48d8bd44d432a5eecf6aca1a864f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b574ac360d661795abb1b86b24f6e910659f5f29be551868a6015124b7bcff7f = $this->env->getExtension("native_profiler");
        $__internal_b574ac360d661795abb1b86b24f6e910659f5f29be551868a6015124b7bcff7f->enter($__internal_b574ac360d661795abb1b86b24f6e910659f5f29be551868a6015124b7bcff7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_b574ac360d661795abb1b86b24f6e910659f5f29be551868a6015124b7bcff7f->leave($__internal_b574ac360d661795abb1b86b24f6e910659f5f29be551868a6015124b7bcff7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7402cefdbbd00e4b067e4182c897620a0334dd0c0ccec0bbb0e7c1df541726da = $this->env->getExtension("native_profiler");
        $__internal_7402cefdbbd00e4b067e4182c897620a0334dd0c0ccec0bbb0e7c1df541726da->enter($__internal_7402cefdbbd00e4b067e4182c897620a0334dd0c0ccec0bbb0e7c1df541726da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "prueba!";
        
        $__internal_7402cefdbbd00e4b067e4182c897620a0334dd0c0ccec0bbb0e7c1df541726da->leave($__internal_7402cefdbbd00e4b067e4182c897620a0334dd0c0ccec0bbb0e7c1df541726da_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b21c0d021a7bcc6126a3ed21734a6fec5d155d9aea8842bc9294bff83a57e = $this->env->getExtension("native_profiler");
        $__internal_085b21c0d021a7bcc6126a3ed21734a6fec5d155d9aea8842bc9294bff83a57e->enter($__internal_085b21c0d021a7bcc6126a3ed21734a6fec5d155d9aea8842bc9294bff83a57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- Loading Bootstrap -->
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Loading Flat UI -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/flat-ui/dist/css/flat-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        
        $__internal_085b21c0d021a7bcc6126a3ed21734a6fec5d155d9aea8842bc9294bff83a57e->leave($__internal_085b21c0d021a7bcc6126a3ed21734a6fec5d155d9aea8842bc9294bff83a57e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6e8b06df5901ded050fb618a4befef2b21210529a00884f784658b8054333f9 = $this->env->getExtension("native_profiler");
        $__internal_c6e8b06df5901ded050fb618a4befef2b21210529a00884f784658b8054333f9->enter($__internal_c6e8b06df5901ded050fb618a4befef2b21210529a00884f784658b8054333f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6e8b06df5901ded050fb618a4befef2b21210529a00884f784658b8054333f9->leave($__internal_c6e8b06df5901ded050fb618a4befef2b21210529a00884f784658b8054333f9_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1131cb2a533443439a33c408c3bac91e6229ad5c35ae43148a508b8d2715752 = $this->env->getExtension("native_profiler");
        $__internal_e1131cb2a533443439a33c408c3bac91e6229ad5c35ae43148a508b8d2715752->enter($__internal_e1131cb2a533443439a33c408c3bac91e6229ad5c35ae43148a508b8d2715752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/flat-ui/dist/js/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/flat-ui/dist/js/vendor/video.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/flat-ui/dist/js/vendor/flat-ui.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e1131cb2a533443439a33c408c3bac91e6229ad5c35ae43148a508b8d2715752->leave($__internal_e1131cb2a533443439a33c408c3bac91e6229ad5c35ae43148a508b8d2715752_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 21,  118 => 20,  113 => 19,  107 => 18,  96 => 17,  86 => 11,  80 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 23,  47 => 18,  45 => 17,  38 => 14,  36 => 6,  32 => 5,  26 => 1,);
    }
}
