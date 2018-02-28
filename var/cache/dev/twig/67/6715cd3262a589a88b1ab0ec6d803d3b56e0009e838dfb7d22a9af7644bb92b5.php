<?php

/* AkinaImmobilierBundle:Front:reserve.html.twig */
class __TwigTemplate_ff5f1ad7d258e19d9156612fd092b31aad14b0a10f194a4075c9c14d457cf52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:reserve.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21a75f1cfd3451534bb62c3f21bbca78418f665c7ec67f38076b7ee853555259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a75f1cfd3451534bb62c3f21bbca78418f665c7ec67f38076b7ee853555259->enter($__internal_21a75f1cfd3451534bb62c3f21bbca78418f665c7ec67f38076b7ee853555259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $__internal_a1b04823247fdc2ed3c4b1c50a38fdc7560edca22ffcab916d44af07c8115c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b04823247fdc2ed3c4b1c50a38fdc7560edca22ffcab916d44af07c8115c48->enter($__internal_a1b04823247fdc2ed3c4b1c50a38fdc7560edca22ffcab916d44af07c8115c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a75f1cfd3451534bb62c3f21bbca78418f665c7ec67f38076b7ee853555259->leave($__internal_21a75f1cfd3451534bb62c3f21bbca78418f665c7ec67f38076b7ee853555259_prof);

        
        $__internal_a1b04823247fdc2ed3c4b1c50a38fdc7560edca22ffcab916d44af07c8115c48->leave($__internal_a1b04823247fdc2ed3c4b1c50a38fdc7560edca22ffcab916d44af07c8115c48_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_2c76c06a7f63a891c2b09bc1febc62d97c4b95b17a7f0f58add478cb9db539da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c76c06a7f63a891c2b09bc1febc62d97c4b95b17a7f0f58add478cb9db539da->enter($__internal_2c76c06a7f63a891c2b09bc1febc62d97c4b95b17a7f0f58add478cb9db539da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_2eee2743e99c5f65ee6c08358583f381f16e415580881da45094cbd68eccc716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eee2743e99c5f65ee6c08358583f381f16e415580881da45094cbd68eccc716->enter($__internal_2eee2743e99c5f65ee6c08358583f381f16e415580881da45094cbd68eccc716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
 ";
        
        $__internal_2eee2743e99c5f65ee6c08358583f381f16e415580881da45094cbd68eccc716->leave($__internal_2eee2743e99c5f65ee6c08358583f381f16e415580881da45094cbd68eccc716_prof);

        
        $__internal_2c76c06a7f63a891c2b09bc1febc62d97c4b95b17a7f0f58add478cb9db539da->leave($__internal_2c76c06a7f63a891c2b09bc1febc62d97c4b95b17a7f0f58add478cb9db539da_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:reserve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
 {% block form %}
{{form(form)}}
 {% endblock %}", "AkinaImmobilierBundle:Front:reserve.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Front/reserve.html.twig");
    }
}
