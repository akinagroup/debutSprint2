<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5afe1dd5fdf734d41a349288580e7ae9d854d399ce14c72d882f0bcf9f62e9d7 extends Twig_Template
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
        $__internal_d6adb52c55a783c69d37109b7ddec032d1e04c794b4da740fa8df4d20cd9fe5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6adb52c55a783c69d37109b7ddec032d1e04c794b4da740fa8df4d20cd9fe5d->enter($__internal_d6adb52c55a783c69d37109b7ddec032d1e04c794b4da740fa8df4d20cd9fe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_453c61bf94e713577d72461efd7073694435bd2a5a4efc992db8c950dddb9671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453c61bf94e713577d72461efd7073694435bd2a5a4efc992db8c950dddb9671->enter($__internal_453c61bf94e713577d72461efd7073694435bd2a5a4efc992db8c950dddb9671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d6adb52c55a783c69d37109b7ddec032d1e04c794b4da740fa8df4d20cd9fe5d->leave($__internal_d6adb52c55a783c69d37109b7ddec032d1e04c794b4da740fa8df4d20cd9fe5d_prof);

        
        $__internal_453c61bf94e713577d72461efd7073694435bd2a5a4efc992db8c950dddb9671->leave($__internal_453c61bf94e713577d72461efd7073694435bd2a5a4efc992db8c950dddb9671_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
