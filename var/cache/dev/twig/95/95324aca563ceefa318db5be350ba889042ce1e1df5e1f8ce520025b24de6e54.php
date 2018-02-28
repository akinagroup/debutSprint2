<?php

/* AkinaImmobilierBundle:Default:index.html.twig */
class __TwigTemplate_c65cea6d2953c289addc5afb2cecca3308eb7a600fdd2ef9a93bb10c4848877a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b216206c14f908d3607161d5d4b23c2ad5dab7b0f94b3d50b6445ab839fbcfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b216206c14f908d3607161d5d4b23c2ad5dab7b0f94b3d50b6445ab839fbcfc1->enter($__internal_b216206c14f908d3607161d5d4b23c2ad5dab7b0f94b3d50b6445ab839fbcfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Default:index.html.twig"));

        $__internal_98d6a85a7dfc144008b6479dfff888c7f644391b4418f02918ca6862667a1b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d6a85a7dfc144008b6479dfff888c7f644391b4418f02918ca6862667a1b53->enter($__internal_98d6a85a7dfc144008b6479dfff888c7f644391b4418f02918ca6862667a1b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b216206c14f908d3607161d5d4b23c2ad5dab7b0f94b3d50b6445ab839fbcfc1->leave($__internal_b216206c14f908d3607161d5d4b23c2ad5dab7b0f94b3d50b6445ab839fbcfc1_prof);

        
        $__internal_98d6a85a7dfc144008b6479dfff888c7f644391b4418f02918ca6862667a1b53->leave($__internal_98d6a85a7dfc144008b6479dfff888c7f644391b4418f02918ca6862667a1b53_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::LayoutAdmin/integration.html.twig\" %}

", "AkinaImmobilierBundle:Default:index.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Default/index.html.twig");
    }
}
