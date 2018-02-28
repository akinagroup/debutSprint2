<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9c6f5f4168aad5895bf06fb4a30df34555c8bf933998287e937b4af76589dac8 extends Twig_Template
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
        $__internal_0a7ac9ae6f9ecd53b099418f0e4e14d2b41e94000dab303251fe95a481f1f67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7ac9ae6f9ecd53b099418f0e4e14d2b41e94000dab303251fe95a481f1f67a->enter($__internal_0a7ac9ae6f9ecd53b099418f0e4e14d2b41e94000dab303251fe95a481f1f67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0a2fd3bf48b7a883868e9479f52cd517868775000cd281246afa1d0a105c4e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2fd3bf48b7a883868e9479f52cd517868775000cd281246afa1d0a105c4e88->enter($__internal_0a2fd3bf48b7a883868e9479f52cd517868775000cd281246afa1d0a105c4e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0a7ac9ae6f9ecd53b099418f0e4e14d2b41e94000dab303251fe95a481f1f67a->leave($__internal_0a7ac9ae6f9ecd53b099418f0e4e14d2b41e94000dab303251fe95a481f1f67a_prof);

        
        $__internal_0a2fd3bf48b7a883868e9479f52cd517868775000cd281246afa1d0a105c4e88->leave($__internal_0a2fd3bf48b7a883868e9479f52cd517868775000cd281246afa1d0a105c4e88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
