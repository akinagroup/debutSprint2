<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ed3aeecacaad63abf4d0087ca9ff459d70dc43251e7ee9952955df1f0c9c34f1 extends Twig_Template
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
        $__internal_75cba38dc7fc8f0abdc1378c36da1a1eb3a7465e93dbf8e3181f69d803f19f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cba38dc7fc8f0abdc1378c36da1a1eb3a7465e93dbf8e3181f69d803f19f1b->enter($__internal_75cba38dc7fc8f0abdc1378c36da1a1eb3a7465e93dbf8e3181f69d803f19f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_8758077552e6727749fe846d1935757756c4127892a9f216982461e2a734107f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8758077552e6727749fe846d1935757756c4127892a9f216982461e2a734107f->enter($__internal_8758077552e6727749fe846d1935757756c4127892a9f216982461e2a734107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_75cba38dc7fc8f0abdc1378c36da1a1eb3a7465e93dbf8e3181f69d803f19f1b->leave($__internal_75cba38dc7fc8f0abdc1378c36da1a1eb3a7465e93dbf8e3181f69d803f19f1b_prof);

        
        $__internal_8758077552e6727749fe846d1935757756c4127892a9f216982461e2a734107f->leave($__internal_8758077552e6727749fe846d1935757756c4127892a9f216982461e2a734107f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
