<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_497958f0dae02d2f297d1f115edf6133813d206d3d5e0ec412f7e0078bbe54fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af391c58a1d4f89de10d687a10e6f117af7a4716af556096fc27cf37dd2addb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af391c58a1d4f89de10d687a10e6f117af7a4716af556096fc27cf37dd2addb6->enter($__internal_af391c58a1d4f89de10d687a10e6f117af7a4716af556096fc27cf37dd2addb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4ae132daafd6ff15dc045de01534047548008c12ba3c63669d47ad047d37848e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae132daafd6ff15dc045de01534047548008c12ba3c63669d47ad047d37848e->enter($__internal_4ae132daafd6ff15dc045de01534047548008c12ba3c63669d47ad047d37848e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af391c58a1d4f89de10d687a10e6f117af7a4716af556096fc27cf37dd2addb6->leave($__internal_af391c58a1d4f89de10d687a10e6f117af7a4716af556096fc27cf37dd2addb6_prof);

        
        $__internal_4ae132daafd6ff15dc045de01534047548008c12ba3c63669d47ad047d37848e->leave($__internal_4ae132daafd6ff15dc045de01534047548008c12ba3c63669d47ad047d37848e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01379eb936d7860cef43f4ce68834997fe3a40b4132ebd92564b8dbad53b5e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01379eb936d7860cef43f4ce68834997fe3a40b4132ebd92564b8dbad53b5e7b->enter($__internal_01379eb936d7860cef43f4ce68834997fe3a40b4132ebd92564b8dbad53b5e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_526b839da7f9ef9db45852610d5d1299dcdb75d1b74386ebe64ec0a7729a9473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526b839da7f9ef9db45852610d5d1299dcdb75d1b74386ebe64ec0a7729a9473->enter($__internal_526b839da7f9ef9db45852610d5d1299dcdb75d1b74386ebe64ec0a7729a9473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_526b839da7f9ef9db45852610d5d1299dcdb75d1b74386ebe64ec0a7729a9473->leave($__internal_526b839da7f9ef9db45852610d5d1299dcdb75d1b74386ebe64ec0a7729a9473_prof);

        
        $__internal_01379eb936d7860cef43f4ce68834997fe3a40b4132ebd92564b8dbad53b5e7b->leave($__internal_01379eb936d7860cef43f4ce68834997fe3a40b4132ebd92564b8dbad53b5e7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a86c20b93b4463482b6bbee44dd60f12d8c55fe8413375b35a11057a9f5792a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a86c20b93b4463482b6bbee44dd60f12d8c55fe8413375b35a11057a9f5792a->enter($__internal_5a86c20b93b4463482b6bbee44dd60f12d8c55fe8413375b35a11057a9f5792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eca9c59661fb4343e77dbe316cfc2d5e75f7835fcd8de4cfb9febaf037f748ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca9c59661fb4343e77dbe316cfc2d5e75f7835fcd8de4cfb9febaf037f748ba->enter($__internal_eca9c59661fb4343e77dbe316cfc2d5e75f7835fcd8de4cfb9febaf037f748ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eca9c59661fb4343e77dbe316cfc2d5e75f7835fcd8de4cfb9febaf037f748ba->leave($__internal_eca9c59661fb4343e77dbe316cfc2d5e75f7835fcd8de4cfb9febaf037f748ba_prof);

        
        $__internal_5a86c20b93b4463482b6bbee44dd60f12d8c55fe8413375b35a11057a9f5792a->leave($__internal_5a86c20b93b4463482b6bbee44dd60f12d8c55fe8413375b35a11057a9f5792a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4c9bda940a1022dd55d13af31ca8b89a215fa9973a394b1b701ec253fda6cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c9bda940a1022dd55d13af31ca8b89a215fa9973a394b1b701ec253fda6cf2->enter($__internal_f4c9bda940a1022dd55d13af31ca8b89a215fa9973a394b1b701ec253fda6cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a8db7bfb42ce48e2efaa80ed8d0110baa93ba9e0c5c6b5d1a10885983a6d6276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8db7bfb42ce48e2efaa80ed8d0110baa93ba9e0c5c6b5d1a10885983a6d6276->enter($__internal_a8db7bfb42ce48e2efaa80ed8d0110baa93ba9e0c5c6b5d1a10885983a6d6276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a8db7bfb42ce48e2efaa80ed8d0110baa93ba9e0c5c6b5d1a10885983a6d6276->leave($__internal_a8db7bfb42ce48e2efaa80ed8d0110baa93ba9e0c5c6b5d1a10885983a6d6276_prof);

        
        $__internal_f4c9bda940a1022dd55d13af31ca8b89a215fa9973a394b1b701ec253fda6cf2->leave($__internal_f4c9bda940a1022dd55d13af31ca8b89a215fa9973a394b1b701ec253fda6cf2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
