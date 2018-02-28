<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8a146166ba0c10490bf7cc245712236adb162af643c664abb18d15e200993dc6 extends Twig_Template
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
        $__internal_3ea1d7dc92eb9eba75ffcf8b36228021d481379dd22db70953fc6a46f33a7baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea1d7dc92eb9eba75ffcf8b36228021d481379dd22db70953fc6a46f33a7baf->enter($__internal_3ea1d7dc92eb9eba75ffcf8b36228021d481379dd22db70953fc6a46f33a7baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_378f90b2ade549dcdfe627a1ba8f54e528a80d724b53e273815a70bca753a9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378f90b2ade549dcdfe627a1ba8f54e528a80d724b53e273815a70bca753a9e4->enter($__internal_378f90b2ade549dcdfe627a1ba8f54e528a80d724b53e273815a70bca753a9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3ea1d7dc92eb9eba75ffcf8b36228021d481379dd22db70953fc6a46f33a7baf->leave($__internal_3ea1d7dc92eb9eba75ffcf8b36228021d481379dd22db70953fc6a46f33a7baf_prof);

        
        $__internal_378f90b2ade549dcdfe627a1ba8f54e528a80d724b53e273815a70bca753a9e4->leave($__internal_378f90b2ade549dcdfe627a1ba8f54e528a80d724b53e273815a70bca753a9e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
