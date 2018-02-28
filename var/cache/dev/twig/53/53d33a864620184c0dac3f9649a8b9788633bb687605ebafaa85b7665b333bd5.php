<?php

/* WaldoDatatableBundle:Renderers:_default.html.twig */
class __TwigTemplate_7cd486186ec95b87670e60bac9b5804c47cc0dbb2b712ddfee4a0186f9ae55d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_698429c25963e9e122d746eb45327a2c8acdf9122fc07c9d08c68823421faa60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698429c25963e9e122d746eb45327a2c8acdf9122fc07c9d08c68823421faa60->enter($__internal_698429c25963e9e122d746eb45327a2c8acdf9122fc07c9d08c68823421faa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Renderers:_default.html.twig"));

        $__internal_d14c484bc96ef9230c2a6485fe0689fab0a70e592a00b83842ec6ee997af6a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14c484bc96ef9230c2a6485fe0689fab0a70e592a00b83842ec6ee997af6a44->enter($__internal_d14c484bc96ef9230c2a6485fe0689fab0a70e592a00b83842ec6ee997af6a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Renderers:_default.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["dt_item"] ?? $this->getContext($context, "dt_item")), "html", null, true);
        
        $__internal_698429c25963e9e122d746eb45327a2c8acdf9122fc07c9d08c68823421faa60->leave($__internal_698429c25963e9e122d746eb45327a2c8acdf9122fc07c9d08c68823421faa60_prof);

        
        $__internal_d14c484bc96ef9230c2a6485fe0689fab0a70e592a00b83842ec6ee997af6a44->leave($__internal_d14c484bc96ef9230c2a6485fe0689fab0a70e592a00b83842ec6ee997af6a44_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Renderers:_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{dt_item}}", "WaldoDatatableBundle:Renderers:_default.html.twig", "/var/www/html/MyJoob/vendor/waldo/datatable-bundle/Resources/views/Renderers/_default.html.twig");
    }
}
