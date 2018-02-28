<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_78daee9ef00f92a0e3eff51d31ae2a5bcb6686766557dbcf4702f99c6992a9c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb504f151045273b65772fd86c8cca10a5d125255a646f6bc8738cb0e605b1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb504f151045273b65772fd86c8cca10a5d125255a646f6bc8738cb0e605b1ee->enter($__internal_cb504f151045273b65772fd86c8cca10a5d125255a646f6bc8738cb0e605b1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e1bfeaa5c9443ce92bb9b5b7dbf7039c992509f2b547ad17c3ef18fc90ff4c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bfeaa5c9443ce92bb9b5b7dbf7039c992509f2b547ad17c3ef18fc90ff4c5a->enter($__internal_e1bfeaa5c9443ce92bb9b5b7dbf7039c992509f2b547ad17c3ef18fc90ff4c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb504f151045273b65772fd86c8cca10a5d125255a646f6bc8738cb0e605b1ee->leave($__internal_cb504f151045273b65772fd86c8cca10a5d125255a646f6bc8738cb0e605b1ee_prof);

        
        $__internal_e1bfeaa5c9443ce92bb9b5b7dbf7039c992509f2b547ad17c3ef18fc90ff4c5a->leave($__internal_e1bfeaa5c9443ce92bb9b5b7dbf7039c992509f2b547ad17c3ef18fc90ff4c5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_877198493adf281b5ef8a3010b47e072706564dbf3b0a09810f243a34089032b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877198493adf281b5ef8a3010b47e072706564dbf3b0a09810f243a34089032b->enter($__internal_877198493adf281b5ef8a3010b47e072706564dbf3b0a09810f243a34089032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_441f4fdf3012f728d21a0cfc9f3a1911525fdd7a5103f807a54a5b26b2794d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441f4fdf3012f728d21a0cfc9f3a1911525fdd7a5103f807a54a5b26b2794d9c->enter($__internal_441f4fdf3012f728d21a0cfc9f3a1911525fdd7a5103f807a54a5b26b2794d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_441f4fdf3012f728d21a0cfc9f3a1911525fdd7a5103f807a54a5b26b2794d9c->leave($__internal_441f4fdf3012f728d21a0cfc9f3a1911525fdd7a5103f807a54a5b26b2794d9c_prof);

        
        $__internal_877198493adf281b5ef8a3010b47e072706564dbf3b0a09810f243a34089032b->leave($__internal_877198493adf281b5ef8a3010b47e072706564dbf3b0a09810f243a34089032b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_489c8c0391edea57f28ae3ae50238b6787373521a00855ea6bf52db4923bb592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489c8c0391edea57f28ae3ae50238b6787373521a00855ea6bf52db4923bb592->enter($__internal_489c8c0391edea57f28ae3ae50238b6787373521a00855ea6bf52db4923bb592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b57e6e390535fb4575e4e42d54ce863b62a56b06b92384a1b0ad1d704bd9a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b57e6e390535fb4575e4e42d54ce863b62a56b06b92384a1b0ad1d704bd9a4a->enter($__internal_7b57e6e390535fb4575e4e42d54ce863b62a56b06b92384a1b0ad1d704bd9a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7b57e6e390535fb4575e4e42d54ce863b62a56b06b92384a1b0ad1d704bd9a4a->leave($__internal_7b57e6e390535fb4575e4e42d54ce863b62a56b06b92384a1b0ad1d704bd9a4a_prof);

        
        $__internal_489c8c0391edea57f28ae3ae50238b6787373521a00855ea6bf52db4923bb592->leave($__internal_489c8c0391edea57f28ae3ae50238b6787373521a00855ea6bf52db4923bb592_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
