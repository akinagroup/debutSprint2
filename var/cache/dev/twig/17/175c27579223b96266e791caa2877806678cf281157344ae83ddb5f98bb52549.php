<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b52c982c3bf3a86024c46fa8c3a62e9c041540c333b4a94c3b80d9b3d0c087a8 extends Twig_Template
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
        $__internal_fc503551a4fd176446ecf9bae19755c5e2dd1d0bd9cc93746c89722290378735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc503551a4fd176446ecf9bae19755c5e2dd1d0bd9cc93746c89722290378735->enter($__internal_fc503551a4fd176446ecf9bae19755c5e2dd1d0bd9cc93746c89722290378735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_31001ef2703799770f49ef3f9ad2bdeb9d7244630ad377d347c01db14795cf2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31001ef2703799770f49ef3f9ad2bdeb9d7244630ad377d347c01db14795cf2e->enter($__internal_31001ef2703799770f49ef3f9ad2bdeb9d7244630ad377d347c01db14795cf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fc503551a4fd176446ecf9bae19755c5e2dd1d0bd9cc93746c89722290378735->leave($__internal_fc503551a4fd176446ecf9bae19755c5e2dd1d0bd9cc93746c89722290378735_prof);

        
        $__internal_31001ef2703799770f49ef3f9ad2bdeb9d7244630ad377d347c01db14795cf2e->leave($__internal_31001ef2703799770f49ef3f9ad2bdeb9d7244630ad377d347c01db14795cf2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
