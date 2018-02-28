<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1ae6396708541f060c1ab537c75b2b46c9c25410679ef81c48d278c224e6980a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff4974bd51bb2aa7ea3749b9a4873d07f1dc8b4708d6eab03862b5aad0386581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4974bd51bb2aa7ea3749b9a4873d07f1dc8b4708d6eab03862b5aad0386581->enter($__internal_ff4974bd51bb2aa7ea3749b9a4873d07f1dc8b4708d6eab03862b5aad0386581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0e0e884b00137cf4f1671d4cb9146f56abb8d0bd5840a9e9b966760eaddf89ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0e884b00137cf4f1671d4cb9146f56abb8d0bd5840a9e9b966760eaddf89ae->enter($__internal_0e0e884b00137cf4f1671d4cb9146f56abb8d0bd5840a9e9b966760eaddf89ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4974bd51bb2aa7ea3749b9a4873d07f1dc8b4708d6eab03862b5aad0386581->leave($__internal_ff4974bd51bb2aa7ea3749b9a4873d07f1dc8b4708d6eab03862b5aad0386581_prof);

        
        $__internal_0e0e884b00137cf4f1671d4cb9146f56abb8d0bd5840a9e9b966760eaddf89ae->leave($__internal_0e0e884b00137cf4f1671d4cb9146f56abb8d0bd5840a9e9b966760eaddf89ae_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b03e32b58615d00c9295f261b1327ff0da7b2de9c8bdd0a6a17bda3e4337e147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03e32b58615d00c9295f261b1327ff0da7b2de9c8bdd0a6a17bda3e4337e147->enter($__internal_b03e32b58615d00c9295f261b1327ff0da7b2de9c8bdd0a6a17bda3e4337e147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b931f53a7538cc6cde70956d436040c1e9f4d4c482bbee77220b1030637d3255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b931f53a7538cc6cde70956d436040c1e9f4d4c482bbee77220b1030637d3255->enter($__internal_b931f53a7538cc6cde70956d436040c1e9f4d4c482bbee77220b1030637d3255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b931f53a7538cc6cde70956d436040c1e9f4d4c482bbee77220b1030637d3255->leave($__internal_b931f53a7538cc6cde70956d436040c1e9f4d4c482bbee77220b1030637d3255_prof);

        
        $__internal_b03e32b58615d00c9295f261b1327ff0da7b2de9c8bdd0a6a17bda3e4337e147->leave($__internal_b03e32b58615d00c9295f261b1327ff0da7b2de9c8bdd0a6a17bda3e4337e147_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed253abbe1db967ddc8c11b3aa2e2631d1e0fecdef1d102da31ab296e05ce8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed253abbe1db967ddc8c11b3aa2e2631d1e0fecdef1d102da31ab296e05ce8bf->enter($__internal_ed253abbe1db967ddc8c11b3aa2e2631d1e0fecdef1d102da31ab296e05ce8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bbf5dd29959ce85983a8dcb893ea3302eb00a24360233baf50fccc7dac18fe85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf5dd29959ce85983a8dcb893ea3302eb00a24360233baf50fccc7dac18fe85->enter($__internal_bbf5dd29959ce85983a8dcb893ea3302eb00a24360233baf50fccc7dac18fe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bbf5dd29959ce85983a8dcb893ea3302eb00a24360233baf50fccc7dac18fe85->leave($__internal_bbf5dd29959ce85983a8dcb893ea3302eb00a24360233baf50fccc7dac18fe85_prof);

        
        $__internal_ed253abbe1db967ddc8c11b3aa2e2631d1e0fecdef1d102da31ab296e05ce8bf->leave($__internal_ed253abbe1db967ddc8c11b3aa2e2631d1e0fecdef1d102da31ab296e05ce8bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
