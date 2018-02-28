<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_664ac0ec481ecf4bf25d18d435c51a1137c977dee40ca8c7ab56c8308924c38c extends Twig_Template
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
        $__internal_89fd5008b1c54762635d35f5e92a6482071404a244a50b70404551589ced3c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fd5008b1c54762635d35f5e92a6482071404a244a50b70404551589ced3c28->enter($__internal_89fd5008b1c54762635d35f5e92a6482071404a244a50b70404551589ced3c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c1ade586ed863f38121ef83c7dd738f2ccb743a5d701f215bda5489335e97e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ade586ed863f38121ef83c7dd738f2ccb743a5d701f215bda5489335e97e1d->enter($__internal_c1ade586ed863f38121ef83c7dd738f2ccb743a5d701f215bda5489335e97e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_89fd5008b1c54762635d35f5e92a6482071404a244a50b70404551589ced3c28->leave($__internal_89fd5008b1c54762635d35f5e92a6482071404a244a50b70404551589ced3c28_prof);

        
        $__internal_c1ade586ed863f38121ef83c7dd738f2ccb743a5d701f215bda5489335e97e1d->leave($__internal_c1ade586ed863f38121ef83c7dd738f2ccb743a5d701f215bda5489335e97e1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
