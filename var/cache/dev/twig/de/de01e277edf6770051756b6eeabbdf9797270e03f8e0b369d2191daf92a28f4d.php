<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5ac747fa12c0719cc4adbc8ced43217fbb9a57a292cb869d469c991746e99d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1a126fa5bca259a4f97cc92eaf050d4735e3528e6ef4abff3284a79a15d9dea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a126fa5bca259a4f97cc92eaf050d4735e3528e6ef4abff3284a79a15d9dea7->enter($__internal_1a126fa5bca259a4f97cc92eaf050d4735e3528e6ef4abff3284a79a15d9dea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e803f280d29ef5037728fcc36a9cfca95707e72ad5bdd4cb3c7a413c134c7055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e803f280d29ef5037728fcc36a9cfca95707e72ad5bdd4cb3c7a413c134c7055->enter($__internal_e803f280d29ef5037728fcc36a9cfca95707e72ad5bdd4cb3c7a413c134c7055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a126fa5bca259a4f97cc92eaf050d4735e3528e6ef4abff3284a79a15d9dea7->leave($__internal_1a126fa5bca259a4f97cc92eaf050d4735e3528e6ef4abff3284a79a15d9dea7_prof);

        
        $__internal_e803f280d29ef5037728fcc36a9cfca95707e72ad5bdd4cb3c7a413c134c7055->leave($__internal_e803f280d29ef5037728fcc36a9cfca95707e72ad5bdd4cb3c7a413c134c7055_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54912f809e7a2a788f42ab670a0f6364dddb81a6356593fff2a1c1ef92dbb943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54912f809e7a2a788f42ab670a0f6364dddb81a6356593fff2a1c1ef92dbb943->enter($__internal_54912f809e7a2a788f42ab670a0f6364dddb81a6356593fff2a1c1ef92dbb943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0a4a1991a6d8d5f8274d9ca5d072b247aafd838048380daa3ee3b00242d7d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a4a1991a6d8d5f8274d9ca5d072b247aafd838048380daa3ee3b00242d7d2e->enter($__internal_f0a4a1991a6d8d5f8274d9ca5d072b247aafd838048380daa3ee3b00242d7d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f0a4a1991a6d8d5f8274d9ca5d072b247aafd838048380daa3ee3b00242d7d2e->leave($__internal_f0a4a1991a6d8d5f8274d9ca5d072b247aafd838048380daa3ee3b00242d7d2e_prof);

        
        $__internal_54912f809e7a2a788f42ab670a0f6364dddb81a6356593fff2a1c1ef92dbb943->leave($__internal_54912f809e7a2a788f42ab670a0f6364dddb81a6356593fff2a1c1ef92dbb943_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b1c76361621e574816c4a7d2d1062307cae2e4622bf48eb32a64e592795a34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1c76361621e574816c4a7d2d1062307cae2e4622bf48eb32a64e592795a34c->enter($__internal_2b1c76361621e574816c4a7d2d1062307cae2e4622bf48eb32a64e592795a34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5c3f389585ea2f424c3492e543b88493c085fa1dd15be862d75f0be112fc583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c3f389585ea2f424c3492e543b88493c085fa1dd15be862d75f0be112fc583->enter($__internal_f5c3f389585ea2f424c3492e543b88493c085fa1dd15be862d75f0be112fc583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f5c3f389585ea2f424c3492e543b88493c085fa1dd15be862d75f0be112fc583->leave($__internal_f5c3f389585ea2f424c3492e543b88493c085fa1dd15be862d75f0be112fc583_prof);

        
        $__internal_2b1c76361621e574816c4a7d2d1062307cae2e4622bf48eb32a64e592795a34c->leave($__internal_2b1c76361621e574816c4a7d2d1062307cae2e4622bf48eb32a64e592795a34c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df0310f80d182339f928cb7abcb8a05e6eb5632453c4b6c0c71bab94177db4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0310f80d182339f928cb7abcb8a05e6eb5632453c4b6c0c71bab94177db4f6->enter($__internal_df0310f80d182339f928cb7abcb8a05e6eb5632453c4b6c0c71bab94177db4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f44f57645196db5881ede82e0cf325c5f059ec2ade2f372e8f49529df988bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f44f57645196db5881ede82e0cf325c5f059ec2ade2f372e8f49529df988bd8->enter($__internal_5f44f57645196db5881ede82e0cf325c5f059ec2ade2f372e8f49529df988bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5f44f57645196db5881ede82e0cf325c5f059ec2ade2f372e8f49529df988bd8->leave($__internal_5f44f57645196db5881ede82e0cf325c5f059ec2ade2f372e8f49529df988bd8_prof);

        
        $__internal_df0310f80d182339f928cb7abcb8a05e6eb5632453c4b6c0c71bab94177db4f6->leave($__internal_df0310f80d182339f928cb7abcb8a05e6eb5632453c4b6c0c71bab94177db4f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
