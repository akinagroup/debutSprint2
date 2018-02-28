<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_dbd0c5cf2bbdb2f1d3bf205395dbd7db66489358b33136a17e430fe092414631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6008e5d77412508678b518725f1afad840b48a1070c87d7c9b1926bb4f9a105b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6008e5d77412508678b518725f1afad840b48a1070c87d7c9b1926bb4f9a105b->enter($__internal_6008e5d77412508678b518725f1afad840b48a1070c87d7c9b1926bb4f9a105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_b5b0c473be0378fbe3121caca9255dcce5b2fc0e57d2ae45ae1a1cd51d400365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b0c473be0378fbe3121caca9255dcce5b2fc0e57d2ae45ae1a1cd51d400365->enter($__internal_b5b0c473be0378fbe3121caca9255dcce5b2fc0e57d2ae45ae1a1cd51d400365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6008e5d77412508678b518725f1afad840b48a1070c87d7c9b1926bb4f9a105b->leave($__internal_6008e5d77412508678b518725f1afad840b48a1070c87d7c9b1926bb4f9a105b_prof);

        
        $__internal_b5b0c473be0378fbe3121caca9255dcce5b2fc0e57d2ae45ae1a1cd51d400365->leave($__internal_b5b0c473be0378fbe3121caca9255dcce5b2fc0e57d2ae45ae1a1cd51d400365_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77cf969b06c1bbe24814069cb137641e05cbbdb456a9f5247b5ebe82dac8cf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cf969b06c1bbe24814069cb137641e05cbbdb456a9f5247b5ebe82dac8cf86->enter($__internal_77cf969b06c1bbe24814069cb137641e05cbbdb456a9f5247b5ebe82dac8cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cba32dc73cb58bfda5c6e7afb9f7ec35aafc8dec3bfed82fa545248c7e05df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cba32dc73cb58bfda5c6e7afb9f7ec35aafc8dec3bfed82fa545248c7e05df1->enter($__internal_9cba32dc73cb58bfda5c6e7afb9f7ec35aafc8dec3bfed82fa545248c7e05df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9cba32dc73cb58bfda5c6e7afb9f7ec35aafc8dec3bfed82fa545248c7e05df1->leave($__internal_9cba32dc73cb58bfda5c6e7afb9f7ec35aafc8dec3bfed82fa545248c7e05df1_prof);

        
        $__internal_77cf969b06c1bbe24814069cb137641e05cbbdb456a9f5247b5ebe82dac8cf86->leave($__internal_77cf969b06c1bbe24814069cb137641e05cbbdb456a9f5247b5ebe82dac8cf86_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d83ed9686033f25014780121b6d4d4cc5a82970e91c0fe7e098cb07e7b4c77f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83ed9686033f25014780121b6d4d4cc5a82970e91c0fe7e098cb07e7b4c77f7->enter($__internal_d83ed9686033f25014780121b6d4d4cc5a82970e91c0fe7e098cb07e7b4c77f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbd79b3944e97d782ad398edbedee94c736d010b46c0752f92b0305a85c8f128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd79b3944e97d782ad398edbedee94c736d010b46c0752f92b0305a85c8f128->enter($__internal_fbd79b3944e97d782ad398edbedee94c736d010b46c0752f92b0305a85c8f128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fbd79b3944e97d782ad398edbedee94c736d010b46c0752f92b0305a85c8f128->leave($__internal_fbd79b3944e97d782ad398edbedee94c736d010b46c0752f92b0305a85c8f128_prof);

        
        $__internal_d83ed9686033f25014780121b6d4d4cc5a82970e91c0fe7e098cb07e7b4c77f7->leave($__internal_d83ed9686033f25014780121b6d4d4cc5a82970e91c0fe7e098cb07e7b4c77f7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0dda736d117d2f49a9dabba43b2f32003d1b49a871a3febd98dda3a8a5907a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0dda736d117d2f49a9dabba43b2f32003d1b49a871a3febd98dda3a8a5907a->enter($__internal_fe0dda736d117d2f49a9dabba43b2f32003d1b49a871a3febd98dda3a8a5907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7899d8e1ce8855d03c13a75c52ccae6fe49f7744520167f15bdb765edaffd5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7899d8e1ce8855d03c13a75c52ccae6fe49f7744520167f15bdb765edaffd5c7->enter($__internal_7899d8e1ce8855d03c13a75c52ccae6fe49f7744520167f15bdb765edaffd5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7899d8e1ce8855d03c13a75c52ccae6fe49f7744520167f15bdb765edaffd5c7->leave($__internal_7899d8e1ce8855d03c13a75c52ccae6fe49f7744520167f15bdb765edaffd5c7_prof);

        
        $__internal_fe0dda736d117d2f49a9dabba43b2f32003d1b49a871a3febd98dda3a8a5907a->leave($__internal_fe0dda736d117d2f49a9dabba43b2f32003d1b49a871a3febd98dda3a8a5907a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
