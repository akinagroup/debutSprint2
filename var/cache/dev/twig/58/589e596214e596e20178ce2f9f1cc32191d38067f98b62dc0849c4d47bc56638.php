<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a3e34a1f23a63e3a2b4d3477a6b1aa09c44b775e231573576f06b79c5391613c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2122463487ee4cd23b475d0873bc9b5917ddbab4b21d34c5c718b1dbf7da45c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2122463487ee4cd23b475d0873bc9b5917ddbab4b21d34c5c718b1dbf7da45c1->enter($__internal_2122463487ee4cd23b475d0873bc9b5917ddbab4b21d34c5c718b1dbf7da45c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a3ba73dbbecdab24bd3ec54959a69df61e1cc92d150be76172b9c36d5d954b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ba73dbbecdab24bd3ec54959a69df61e1cc92d150be76172b9c36d5d954b99->enter($__internal_a3ba73dbbecdab24bd3ec54959a69df61e1cc92d150be76172b9c36d5d954b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2122463487ee4cd23b475d0873bc9b5917ddbab4b21d34c5c718b1dbf7da45c1->leave($__internal_2122463487ee4cd23b475d0873bc9b5917ddbab4b21d34c5c718b1dbf7da45c1_prof);

        
        $__internal_a3ba73dbbecdab24bd3ec54959a69df61e1cc92d150be76172b9c36d5d954b99->leave($__internal_a3ba73dbbecdab24bd3ec54959a69df61e1cc92d150be76172b9c36d5d954b99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40cb6a76178c2b65dfe327ffdda92b8914f4317e73bd9af0c45ba168a42dc893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cb6a76178c2b65dfe327ffdda92b8914f4317e73bd9af0c45ba168a42dc893->enter($__internal_40cb6a76178c2b65dfe327ffdda92b8914f4317e73bd9af0c45ba168a42dc893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04071e24e3ee1e476eb5f11d8b70dc75d2c5176ba47a302c9df1422316130366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04071e24e3ee1e476eb5f11d8b70dc75d2c5176ba47a302c9df1422316130366->enter($__internal_04071e24e3ee1e476eb5f11d8b70dc75d2c5176ba47a302c9df1422316130366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_04071e24e3ee1e476eb5f11d8b70dc75d2c5176ba47a302c9df1422316130366->leave($__internal_04071e24e3ee1e476eb5f11d8b70dc75d2c5176ba47a302c9df1422316130366_prof);

        
        $__internal_40cb6a76178c2b65dfe327ffdda92b8914f4317e73bd9af0c45ba168a42dc893->leave($__internal_40cb6a76178c2b65dfe327ffdda92b8914f4317e73bd9af0c45ba168a42dc893_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
